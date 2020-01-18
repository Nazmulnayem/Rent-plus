<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postad;
use Image;

class profileController extends Controller
{
    public function profilepostmanage($name){
        $postads = Postad::Where('RenterUsername',$name)->get();
        return response()->json([
            'postads' => $postads],200);

    }
    public function profilepostdelete($id){
        $post = postad::find($id);
        $image_path = public_path()."/uploadimage/";

        $image = $image_path. $post->image_name;

        if(file_exists($image)){
            @unlink($image);
        }
        $post->delete();

    }
    public function profilepostedit($id){
        $postads = Postad::find($id);
        return response()->json([
            'postads' => $postads],200);

    }
    public function profilepostupdate(Request $request, $id){

        $postad = Postad::find($id);
        $this->validate($request, [

            'RenterUsername' => 'required',
            'Housename' => 'required',
            'phonenumber' => 'required',
            'availablefloor' => 'required'


        ]);

        if($request->image_name!=$postad->image_name) {
            $strpos = strpos($request->image_name, ';');
            $sub = substr($request->image_name, 0, $strpos);
            $ex = explode('/', $sub)[1];
            $name = time().".".$ex;
            $img = Image::make($request->image_name)->resize(200, 200);
            $upload_path = public_path()."/uploadimage/";
            $image = $upload_path. $postad->image_name;
            $img->save($upload_path.$name);
            if (file_exists($image)) {
                @unlink($image);
            }
        }
        else{

            $name = $postad->image_name;
                      }



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
        $postad->image_name = $name;

        $postad->save();


    }
}
