<?php

namespace App\Http\Controllers;

use App\Events\MessageSend;
use Illuminate\Http\Request;
use App\chat;
use App\User;


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

      $chat = new Chat();
        $chat->from  = auth()->user()->name;
        $chat->to  = $request->user_to;
        $chat->massage  = $request->massage;
        $chat->save();

        broadcast(new MessageSend($chat));

    }
    public function chatlist($name){

        if(!\Request::ajax()){

            return abort(404);
        }
        $chatdata = chat::where(function ($q) use($name){

            $q->whereNotIn('to',[$name]);


        })->orWhere(function ($q) use($name){

            $q->whereNotIn('from',[$name]);

        })->first();



        return response()->json(
            ['chatdata'=>$chatdata],200);

    }
}
