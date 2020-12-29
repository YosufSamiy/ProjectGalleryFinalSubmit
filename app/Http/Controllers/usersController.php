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

    }
}
