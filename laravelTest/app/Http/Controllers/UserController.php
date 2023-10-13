<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function listeUsers(){
        $user = User::select('id','name','email','password')->orderBy('id','desc')->get();
        //dd($user);
        return view('users', compact('user'));
    }
}
