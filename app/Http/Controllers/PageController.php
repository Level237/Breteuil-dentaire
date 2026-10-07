<?php

namespace App\Http\Controllers;

use App\Models\Faq;
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
    public function moreDent(){

        return view('remplacer-plusieurs-dent');
    }

    public function allDent(){

        return view('remplacer-toute-ces-dents');
    }

    public function chirugie(){

        return view('chirugie-preimplantaire');
    }

    public function conseils(){

        return view("conseil-post-operatoire");
    }

    public function faq()
    {
        $faqGroups = Faq::query()
            ->published()
            ->orderBy('category')
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get()
            ->groupBy('category');

        return view('faqs', compact('faqGroups'));
    }

    public function eclair(){

        return view('eclaircissement');
    }

    public function esthetique(){

        return view('eclaircissement-sourire');
    }

    public function facette(){

        return view('facette-dentaire');
    }

    public function facettePelliculaire(){

        return view('facette-pelliculaire');
    }

    public function dentisterie(){

        return view('dentisterie-numerique');
    }

    public function congratulation(){

        return view('success');
    }
}
