<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $name = 'Kamdjou';
        return view('test', compact('name'));
    }

    public function show(){
        $name = 'Duplex';
        return view('welcome',['name'=> $name]);
    }
}
