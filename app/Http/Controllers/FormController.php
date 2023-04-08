<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
     public function getdata()
     {
         return view('layouts.form');
     }

     public function submitdata(Request $req)
     {
          $req->validate([
            'email'=>'required',
            'password'=>'required | min:5 | same: confirm_password'
          ],['email.required'=>'This Mail Is Required']);
          return $req->all();
     }
}
