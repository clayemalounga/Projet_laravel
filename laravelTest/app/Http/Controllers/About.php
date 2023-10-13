<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    public function about(){
        $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ut quod obcaecati, et adipisci quaerat consectetur fugiat, natus autem asperiores modi doloribus. Non accusantium nesciunt nemo, consequatur unde aliquam fugiat?';
        return view('apropos',compact('text'));
    }
}
