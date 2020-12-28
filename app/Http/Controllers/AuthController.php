<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
//    public function login(){
//        return view('Auth.login');
//
//    }
//    public function authenticate(Request $request){
//
//
////        $login_date=['email'=>$request->email,'password'=>$request->password];
//
//        if(User::where('email',$request->email)->where('password',$request->password)->first()){
//            return redirect()->route('dashboard.dashboard.layout.admin');
//        }
//
//        return redirect()->back()->with('error','اتاكد بالله ازا البيانات صحيحة او كاملة');
//
//    }
//
//
//
//
//    public function logout(){
//
//        if(Auth::check()){
//            Auth::logout();
//        }
//
//        return view('frontsite.photo');
//    }
}
