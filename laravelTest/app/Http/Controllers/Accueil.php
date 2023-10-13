<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Accueil extends Controller
{
    public function home()
    {
        $name = "Malounga";
        // dd($name);
        return view('accueil', compact('name'));
    }
}