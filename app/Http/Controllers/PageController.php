<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function urgence(){

        return view('urgence');
    }

    public function protese(){
        return view('protese');
    }

    public function implant(){

        return view('implant-dentaire');
    }

    public function oneDent(){

        return view('remplacer-une-dent');
    }
}
