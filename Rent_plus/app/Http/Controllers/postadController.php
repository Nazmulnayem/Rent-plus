<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postadController extends Controller
{
    public function postadsave(){
        return view('frontEnd.postad.postad');
    }
}
