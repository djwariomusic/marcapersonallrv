<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

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
}
