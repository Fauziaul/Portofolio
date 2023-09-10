<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class BtnController extends Controller
{
    public function backButtonAction()
{
   
    
    // Redirect ke halaman utama
    return redirect()->route('/');
}



}
