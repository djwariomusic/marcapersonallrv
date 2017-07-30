<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UsersController extends Controller
{
    //
    public function showPost($username){
      $user= $this->findByUsername($username);
      $data= Post::with('user')->where('user_id','=', $user->id)->orderBy('publish_date','desc')->Paginate(5);
      return view('users.show',['posts'=> $data,'users'=>$user,]);
    }
    public function searchUser(){
      $input =Input::all();
      $data =(strtolower($input['username']));

      $user = User::where('username','LIKE', "%$data%")->get();
      $user = User::where('username','LIKE', "%$data%")->orderBy('username')->Paginate(5);
      return view('users.search',['users'=>$user,]);
    }
    public function showGraph($username){
      $data2017= Post::whereYear('created_at','=','2017')->count();
      $data2016= Post::whereYear('created_at','=','2016')->count();
      $data2015= Post::whereYear('created_at','=','2015')->count();
      $data2014= Post::whereYear('created_at','=','2014')->count();
      $data2013= Post::whereYear('created_at','=','2013')->count();
      $data2012= Post::whereYear('created_at','=','2012')->count();

      $user= $this->findByUsername($username);
      $dataEnero17= Post::whereYear('created_at','=','2017')->whereMonth('created_at','=','01')->where('user_id','=', $user->id)->count();
      $dataFebrero17= Post::whereYear('created_at','=','2017')->whereMonth('created_at','=','02')->where('user_id','=', $user->id)->count();
      $dataMarzo17= Post::whereYear('created_at','=','2017')->whereMonth('created_at','=','03')->where('user_id','=', $user->id)->count();
      $dataAbril17= Post::whereYear('created_at','=','2017')->whereMonth('created_at','=','04')->where('user_id','=', $user->id)->count();
      $dataMayo17= Post::whereYear('created_at','=','2017')->whereMonth('created_at','=','05')->where('user_id','=', $user->id)->count();
      $dataJunio17= Post::whereYear('created_at','=','2017')->whereMonth('created_at','=','06')->where('user_id','=', $user->id)->count();
      $dataJulio17= Post::whereYear('created_at','=','2017')->whereMonth('created_at','=','07')->where('user_id','=', $user->id)->count();

      $query=Post::join('users','user_id','=','users.id')->groupBy('users.name')->selectRaw('users.name, count(posts.id) as count')->orderBy('count','desc')->take(5)->get();


      return view('users.graphs',['posts2017'=> $data2017,'posts2016'=> $data2016,
                                  'posts2015'=> $data2015,'posts2014'=> $data2014,
                                  'posts2013'=> $data2013,'posts2012'=> $data2012,
                                  'dataEnero17'=> $dataEnero17,'dataFebrero17'=> $dataFebrero17,
                                  'dataMarzo17'=> $dataMarzo17,'dataAbril17'=> $dataAbril17,
                                  'dataMayo17'=> $dataMayo17,'dataJunio17'=> $dataJunio17,
                                  'dataJulio17'=> $dataJulio17,'querys'=>$query]);
    }

    public function showDocs(){
      return view('users.documents');
    }
    private function findByUsername($username){
      return User::where('username', $username)->firstorFail();
    }
}
