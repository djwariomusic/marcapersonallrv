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
    public function showGraph(){
      $data2017= Post::whereYear('created_at','=','2017')->count();
      $data2016= Post::whereYear('created_at','=','2016')->count();
      $data2015= Post::whereYear('created_at','=','2015')->count();
      $data2014= Post::whereYear('created_at','=','2014')->count();
      $data2013= Post::whereYear('created_at','=','2013')->count();
      $data2012= Post::whereYear('created_at','=','2012')->count();


      return view('users.graphs',['posts2017'=> $data2017,'posts2016'=> $data2016,'posts2015'=> $data2015,'posts2014'=> $data2014,'posts2013'=> $data2013,'posts2012'=> $data2012]);
    }
    private function findByUsername($username){
      return User::where('username', $username)->first();
    }
}
