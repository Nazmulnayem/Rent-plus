<?php

namespace App\Http\Controllers;

use App\postad;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
  public function welcomepage(){
      $postads = Postad::paginate(6);
      return view('frontEnd.home.homeContent',['postads' => $postads]);
  }
}
