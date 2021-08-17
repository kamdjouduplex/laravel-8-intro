<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function apropos(){
        $text = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur, possimus aperiam provident pariatur iure reiciendis quae excepturi repudiandae vel velit aliquam, fugiat facilis ipsa cupiditate recusandae, odit voluptatibus impedit. Qui.';
        return view('apropos', compact('text'));
    }
}
