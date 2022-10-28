<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextController extends Controller
{
    public function index()
    {
        return view('main.text');
    }

    public function insert(Request $request)
    {
        $longText = $request->input('long_desc');
        dd($longText);
        return view('main.text');
    }
}
