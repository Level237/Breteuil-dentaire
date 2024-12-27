<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function appointment(){

        return view('appointment');
    }

    public function store(Request $request){


        return back()->with('success', "Votre email a bien été envoyé avec success,nous vous contacterons  d' ici peu");
    }
}
