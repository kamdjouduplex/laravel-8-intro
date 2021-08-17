<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        $email = 'tony14pro@gmail.com';
        $tel = 670274538;
        return view('contact', compact('tel', 'email'));
    }
}
