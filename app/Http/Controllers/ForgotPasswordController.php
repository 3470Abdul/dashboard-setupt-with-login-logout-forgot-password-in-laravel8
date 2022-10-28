<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\OTPMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class ForgotPasswordController extends Controller
{
    public function sendOtp(Request $request)
    {
        $email = $request->input('email');
        $messages = [
            'email.required' => 'Email is required',
            'email.email' => 'Invalid Email Format',
        ];

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ], $messages);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $user = User::where('email', '=',  $email)->first();

        if(!$user)
        {
            return Redirect::back()->with('status', 'This email does not match our record')->withInput();
        }
        else
        {
            $otp = rand(123165,787934);
            Mail::to($user->email)->send(new OTPMail($otp));
                if (Mail::failures()) {
                    return Redirect::back()->with('status', 'Sorry! Please try again later')->withInput();
                }
                else
                {
                    $user->update([
                        $user->otp = $otp,
                    ]);
                    return redirect('otpInput')->with('otpMessage', 'OTP send successfully on your email address please check email inbox')->withInput();
                }
        }

    }

    public function otpInput()
    {
        return View('auth.passwords.otpInput');
    }

    public function otpVerification(Request $request)
    {
        $email = $request->input('email');
        $otp = $request->input('otp');

        $messages = [
            'otp.required' => 'OTP verification Code is Required',
            'otp.digits' => 'Please input 6 digits OTP verification Code',
          ];

        $validator = Validator::make($request->all(), [
            'otp' => 'required|digits:6',
        ], $messages);


        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $user = User::where('email', '=',  $email)->first();

        if(!$user)
        {
           // return Redirect::back()->with('status', 'This email does not match our record')->withInput();
           return redirect('password/reset')->with('errorMessage', 'Email Field was missing please start Forgot password process again')->withInput();
        }
        else
        {
            if ($user->otp == $otp)
            {
                return redirect('resetPasswordInput')->with('resetPasswordMessage', 'OTP Verified successfully')->withInput();
            }
            else
            {
                return Redirect::back()->with('status', 'Invalid OTP Please input valid OTP')->withInput();
            }
        }

    }

    public function resetPasswordInput()
    {
        return view('auth.passwords.resetPasswordInput');
    }

    public function resetPasswordSet(Request $request)
    {
        $messages = [
            'password.required' => 'Password is required',
            'password.min' => 'Password should Contains at least 8 characters',
            'password.same' => 'Password and Confirm Password does not matched',
            'password_confirmation.required' => 'Confirm Password is required',
        ];

        $validator = Validator::make($request->all(), [
            'password' => 'required|min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'required|min:8',
        ], $messages);

        if($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        else
        {
                $email = $request->input('email');
                $otp = $request->input('otp');
                $otp = $request->input('otp');
                $newPassword = $request->input('password');
                $user = User::where('email', '=',  $email)->first();

                if(!$user)
                    {
                        return redirect('password/reset')->with('errorMessage', 'Email or OTP Field was missing please start Forgot password process again')->withInput();
                    }
                    else
                    {
                        if (!($user->otp == $otp))
                        {
                            return redirect('password/reset')->with('errorMessage', 'Email or OTP Field was missing please start Forgot password process again')->withInput();
                        }
                        else
                        {
                            $user->update([
                                $user->password = Hash::make($newPassword),
                                $user->otp = '',
                            ]);

                            return redirect('login')->with('successMessage', 'New Password Set Successfully');
                        }
                    }

        }


    }
}
