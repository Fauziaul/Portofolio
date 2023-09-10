<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    // public function showForm()
    // {
    //     return view('layouts.form');
    // }

    // public function submitForm(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'full-name' => 'required',
    //         'email' => 'required|email',
    //         'message' => 'required',
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->back()
    //             ->withErrors($validator)
    //             ->withInput();
    //     }

    //     // Lakukan sesuatu dengan data yang dikirimkan, misalnya mengirim email atau menyimpan ke database

    //     return redirect()->route('thankyou');
    // }
}