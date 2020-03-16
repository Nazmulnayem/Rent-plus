<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postad;
use App\Payment;

class adminController extends Controller
{
    public function postadinfo(){
        $postads = postad::all();

        return view('frontEnd.admin.admin',['postads' =>$postads]);

    }
    public function paymentinfo(){
        $payments = Payment::all();

        return view('frontEnd.admin.payment',['payments' =>$payments]);

    }
    public function login(){


        return view('frontEnd.admin.login');

    }public function adminLogin(Request $request){


        return $request->all();

    }
    public function postadedit($id){

        $postadsByID = postad::where('id',$id);
        return view('frontEnd.admin.postinfoedit',['postadsByID' =>$postadsByID]);
    }
}
