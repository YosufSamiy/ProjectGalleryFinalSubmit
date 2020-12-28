<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
    public function encrypt(){


        $contact=Contact::all();
        dd($contact->toArray());

//        $message ="Welcom to IUG";
//
//
//
//        $encryptting=encrypt($message);
//
//        $decrypting=decrypt($encryptting);
//        dd($decrypting);
//
////
////        $hasing= Hash::make($message);
////
////        dd($hasing);
    }
}
