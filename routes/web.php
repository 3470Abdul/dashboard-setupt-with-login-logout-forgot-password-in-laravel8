<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('sendOtp', [App\Http\Controllers\ForgotPasswordController::class, 'sendOtp'])->name('sendOtp');
Route::get('otpInput', [App\Http\Controllers\ForgotPasswordController::class, 'otpInput'])->name('otpInput');
Route::post('otpVerification', [App\Http\Controllers\ForgotPasswordController::class, 'otpVerification'])->name('otpVerification');
Route::get('resetPasswordInput', [App\Http\Controllers\ForgotPasswordController::class, 'resetPasswordInput'])->name('resetPasswordInput');
Route::post('resetPasswordSet', [App\Http\Controllers\ForgotPasswordController::class, 'resetPasswordSet'])->name('resetPasswordSet');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::post('/text', [App\Http\Controllers\TextController::class,'insert']);
    Route::get('/text', [App\Http\Controllers\TextController::class,'index']);

    //Route for Users start//
    Route::get('/users', [App\Http\Controllers\UsersController::class,'index']);
    //Route for Users start//

});




