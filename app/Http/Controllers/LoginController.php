<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;

use Illuminate\Support\Facades\DB;
class LoginController extends Controller {

    public function submit(LoginRequest $rec){

      $email=$rec->input('email');
      $password=$rec->input('password');

      $data = DB::select('select id from logins where email=? and password =?',[$email,$password]);
      if(count($data)){
        return redirect()->route('home');
      } else {
      return redirect()->route('login')->with('success','Please,enter you data correctly!');
      }


    }
}
