<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function teamList()
    {
        return view('our-team');
    }
}
