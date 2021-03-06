<?php

namespace App\Http\Controllers;

use App\Message;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MessagesController extends Controller
{
   public function getMessage(){
     $input = Input::all();

     $message = new Message();

     $message->name = $input['name'];
     $message->telephone = $input['telephone'];
     $message->email = $input['email'];
     $message->description = $input['description'];
     $message->message = $input['message'];
     $message->save(); // Guarda el objeto en la BD
     $alerts = "Mensaje Confirmado";
     return View('contact',['alerts'=>$alerts,]);
   }

   public function showlistmessages(){
     $messages = Message::orderby('created_at','desc')->Paginate(5);
     return view('adminlte::messages.listmessages',['messages'=>$messages]);
   }

   public function showmessage($id){
     $message = Message::where('id',$id)->first();
     return view('adminlte::messages.message',['message'=>$message]);
   }

   public function delmessage(){
     $input = Input::all();
     $message = Message::where('id','=',$input['idmessage'])->firstorFail();
         if($message == null){
           return view('adminlte::messages.listmessages');
           }
           else{
             $message->delete();
             return redirect()->to('/home')->with('alerts','Mensaje Eliminado');
           }
   }

   public function savemessage(){
     $alerts=NULL;
     $input = Input::all();
     $message = Message::where('id','=',$input['idmessage'])->firstorFail();
         if($message == null){
           return view('adminlte::messages.listmessages');
           }
           else{
             $message->state = $input['state'];
             $message->save();
             return redirect()->to('public/home')->with('alerts','Mensaje Guardado');
           }

   }
}
