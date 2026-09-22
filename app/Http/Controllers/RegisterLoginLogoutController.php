<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class RegisterLoginLogoutController extends Controller
{
    #Show Register Form ----------------------------------------
    function Show_RegisterForm() 
    {
        return view('Register_user');
    }

  #Proccessing Regestre ***********************************
    function RegisterProccess(Request $request): RedirectResponse
    {
         $request->validate([
            'name'      =>  'string|required|max:255',
            'email'     =>  'string|email|required|max:255|unique:users',
            'password'  =>  'string|min:6|required|confirmed'
         ]);
         $user = User::create([
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'password'  =>  Hash::make($request->password)
         ]);
         return redirect()->route('login')->with('status',' Welcome ,' .$request->name .' You can now Log in');
    }


    #Show Login Form ----------------------------------------
    function Show_LoginForm(){
        return view('LoginForm');
    }

  #Proccessing The Login user *********************************
  function Login_Proccess (Request $request){

    $request->validate([
        'email'     =>  'required',
        'password'  =>  'required'
    ]);
    
    $credentials    =   $request->only('email','password');

    if (Auth::attempt($credentials,$request->boolean('remember'))) {
        return redirect()->intended('home');
    }
    return back()->withInput()->with('status','Invalidated password OR email');

  }

  #Proccessing The Log OUT Function *********************************
    function logout(): RedirectResponse 
    {
        Session::flush();
        Auth::logout();
        return redirect('home')->with('status','Log out successful !');
    }
}
