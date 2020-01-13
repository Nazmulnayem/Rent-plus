<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postad;

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
        $postads = Postad::Where('id',$id)->get();
        return response()->json([
            'postads' => $postads],200);

    }
}
