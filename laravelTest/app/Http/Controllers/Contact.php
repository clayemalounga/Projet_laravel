<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    public function contact(){
        $tel = 785818082;
        $email ="clayemalounga@gmail.com";
        return view('contact', compact('tel', 'email'));
    }
}
