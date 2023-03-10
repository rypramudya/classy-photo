<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function halamanlogin(){
    return view('pengguna.login');
   }

   public function postLogin(Request $request){
    if(Auth::attempt($request->only('email','password'))){
        return redirect('/home');
    }
    return redirect('/login');
   }

   public function logout(){
        Auth::logout();
        return redirect('/login');
    }
  
   

}
