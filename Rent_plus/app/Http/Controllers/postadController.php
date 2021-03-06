<?php

namespace App\Http\Controllers;

use App\likeinfo;
use Illuminate\Http\Request;
use App\postad;
use Image;
use App\Payment;

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
            'availablefloor' => 'required',
            'user_type' => 'required'


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
        $postad->publication_status =$request->publication_status;

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
        $postads = postad::where('Divisionselect',$request->selectDivision)
                         ->Where('Cityselect',$request->selectCity)
                         ->Where('Areaselect',$request->selectArea)
                         ->Where('type_rent',$request->type_rent)
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
    public function postadlike(Request $request){

        $likeinfo = new likeinfo();

        $likeinfo->like_from = auth()->user()->name;
        $likeinfo->post_id =$request->post_id;
        $likeinfo->Housename =$request->Housename;
        $likeinfo->save();




    }

    public function postadconfirmdetails($id){
        $postads = Postad::find($id);
        if(\Request::ajax()){
            return response()->json([
                'postads' => $postads],200);

        }

        return abort(404);

    }
    public function postadnotification($name){

        $likeinfos = likeinfo::where('like_from',$name)->get();
        return response()->json([
            'likeinfos' => $likeinfos],200);
    }
    public function postadpayment(Request $request){
        $payment= new Payment();
        $payment->payment_type = $request->payment_type;
        $payment->phone = $request->phone;
        $payment->TransectionID = $request->TransectionID;
        $payment->save();



    }

}
