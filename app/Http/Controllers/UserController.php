<?php

namespace App\Http\Controllers;
use App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::select('id', 'name', 'email', 'created_at')->orderBy('id', 'desc')->get();
        return view('list-users', compact('users'));
    }
}
