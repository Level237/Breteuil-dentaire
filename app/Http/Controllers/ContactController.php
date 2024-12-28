<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactView(){

        return view('contact');
    }

    public function send(Request $request){

        Mail::to('Bramslevel129@gmail.com')
            ->send(new Contact($request->except('_token')));

            return back()->with('success', "Votre email a bien été envoyé avec success,nous vous contact");
    }
}
