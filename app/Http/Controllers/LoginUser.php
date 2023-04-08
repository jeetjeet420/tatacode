<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginUser extends Controller
{
    //
        public function login()
        {
            return view('loginpage');
        }
        public function loginform(Request $request)
        {
              $data=$request->all();
              print_r($data);
        }
        public function callback()
        {
           $data=['Jeet','Mukesh','Heera','Aman'];
           return view('welcome',['users'=>$data]);
        }
}
