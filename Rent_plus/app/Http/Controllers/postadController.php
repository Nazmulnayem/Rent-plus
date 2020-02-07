<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postad;
use Image;

class postadController extends Controller
{
    public function postad(){
        return view('frontEnd.frontenduser.postad.postadContent');
    }

    public function postadsave(Request $request)
    {

        $this->validate($request, [

            'RenterUsername' => 'required',
            'Housename' => 'required',
            'phonenumber' => 'required',
            'availablefloor' => 'required'


        ]);
        $strpos = strpos($request->image_name,';');
        $sub = substr($request->image_name,0,$strpos);
        $ex = explode('/',$sub)[1];
        $name = time().".".$ex;
        $img = Image::make($request->image_name)->resize(200, 200);
        $upload_path = public_path()."/uploadimage/";
        $img->save($upload_path.$name);


        $postad = new Postad();
        $postad->RenterUsername = $request->RenterUsername;
        $postad->Housename = $request->Housename;
        $postad->phonenumber = $request->phonenumber;
        $postad->availablefrom = $request->availablefrom;
        $postad->availablefloor = $request->availablefloor;
        $postad->type_rent = $request->type_rent;
        $postad->budget_rent = $request->budget_rent;
        $postad->Divisionselect = $request->Divisionselect;
        $postad->Cityselect = $request->Cityselect;
        $postad->Areaselect = $request->Areaselect;
        $postad->full_address = $request->full_address;
        $postad->About_rent = $request->About_rent;
        $postad->user_type = $request ->user_type;
        $postad->image_name = $name;

        $postad->save();


    }
public function postadManage(){

    $postads = Postad::all();

    if(\Request::ajax()){
        return response()->json([
            'postads' => $postads],200);

    }

   return abort(404);




}
public function postdetails($id){
    $postads = Postad::find($id);
    if(\Request::ajax()){
        return response()->json([
            'postads' => $postads],200);

    }

    return abort(404);


}

public function postadsearch(Request $request){
        $postads = postad::where('Divisionselect',$request->Divisionselect)
                         ->orWhere('Cityselect',$request->Cityselect)
                         ->orWhere('Areaselect',$request->Areaselect)
                         ->orWhere('type_rent',$request->type_rent)
                       ->get();
    if(\Request::ajax()){
        return response()->json([
            'postads' => $postads],200);

    }

    return abort(404);




}
public function postadsearchallpost(){
    $postads = postad::all();
    if(\Request::ajax()){
        return response()->json([
            'postads' => $postads],200);

    }

    return abort(404);

}

}
