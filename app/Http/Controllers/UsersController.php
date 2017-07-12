<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Post;


use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function showPost($username){
      $user2=5;
      $user= $this->findByUsername($username);
      $data= Post::where('user_id','=', $user->id)->Paginate(5);
      return view('users.show',['posts'=> $data,'users'=>$user]);
    }
    private function findByUsername($username){
      return User::where('username', $username)->first();
    }
}
