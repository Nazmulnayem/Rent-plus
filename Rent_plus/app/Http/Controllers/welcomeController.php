<?php

namespace App\Http\Controllers;

use App\postad;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
  public function welcomepage(){
      $postads = Postad::all();
      return view('frontEnd.home.homeContent',['postads' => $postads]);
  }
}
