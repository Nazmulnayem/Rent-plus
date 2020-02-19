<?php

namespace App\Http\Controllers;

use App\Events\MessageSend;
use Illuminate\Http\Request;
use App\chat;



class chatController extends Controller
{

    public function chatdata($name=null){

        if(!\Request::ajax()){

            return abort(404);
        }


        $chatdata = chat::where(function ($q) use($name){

            $q->where('from',auth()->user()->name);
            $q->where('to',$name);

        })->orWhere(function ($q) use($name){
            $q->where('from',$name);
            $q->where('to',auth()->user()->name);

        })->get();

      return response()->json(
          ['chatdata'=>$chatdata],200);

    }
    public function chatmassages(Request $request){

         $chatmassage = new Chat();
        $chatmassage->from = auth()->user()->name;

        $chatmassage->to = $request->user_to;

        $chatmassage->massage =$request->massage;
        $chatmassage->type = 0;
        $chatmassage ->save();
    }

    public function chatlist($name){

        if(!\Request::ajax()){

            return abort(404);
        }
        $chatdata = chat::where(function ($q) use($name){

            $q->whereIn('from',[$name]);


        })->orWhere(function ($q) use($name){

            $q->whereIn('to',[$name]);

        })->get();



        return response()->json(
            ['chatdata'=>$chatdata],200);

    }
}
