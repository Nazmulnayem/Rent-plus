<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postad;

class postadController extends Controller
{
    public function postad(){
        return view('frontEnd.frontenduser.postad.postadContent');
    }

    public function postadsave(Request $request){

        $this->validate($request,[

            'RenterUsername'=>'required',
            'Housename'=>'required',
             'phonenumber'=>'required',
            'availablefloor'=>'required'


        ]);

       $postad = new Postad();
        $postad->RenterUsername = $request->RenterUsername;
        $postad->Housename = $request->Housename;
        $postad->phonenumber = $request->phonenumber;
        $postad->availablefloor = $request->availablefloor;
        $postad->type_rent = $request->type_rent;
        $postad->budget_rent = $request->budget_rent;
        $postad->Divisionselect = $request->Divisionselect;
        $postad->Cityselect = $request->Cityselect;
        $postad->Areaselect = $request->Areaselect;
        $postad->full_address = $request->full_address;
        $postad->About_rent = $request->About_rent;
        $postad->save();


        return redirect('')->with('message','successful');

    }
public function postadmanage(){




}
}
