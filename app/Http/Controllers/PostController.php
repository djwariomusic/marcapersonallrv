<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class PostController extends Controller
{

  public function getList() {
    $data= Post::where('user_id', 2)->get();
    $data= Post::where('user_id', 2)->orderBy('publish_date','desc')->Paginate(5);

  return view('blog', ['posts'=> $data]);
  }
  public function getPost($id) {
    $post = Post::where('id',$id)->firstorFail();
    if($post != null){
        $users = User::where('id',$post->user_id)->firstorFail();
        $data['post'] = $post;
        $data['comments'] = Comment::where('post_id', $id)->get();
        return view('posts.post',$data,[ 'users'=>$users]);
    }
  }
  public function postSavepost() {

    $input = Input::all();

    if(isset($input['post_id'])) {
        $post = Post::with('user')->where('id','=',$input['post_id'])->firstorFail();
    }
    else {
        $post = new Post();
    }
    $post->title = $input['title'];
    $post->resume = $input['resume'];
    $post->description = $input['description'];
    $post->publish_date = $input['publish_date'];
    $post->status = $input['status'];
    $post->imagen = 'http://lorempixel.com/500/338?' .mt_rand(0,100);
    $post->user_id = $input['user_id'];
    $post->save(); // Guarda el objeto en la BD
    return redirect()->to('/home')->with('alerts','Post guardado');
  }
  public function getEditpost($id = null, Request $request) {
  $alerts=NULL;
  $me = $request->user();

    if ($id == null){
        return view('posts.edit-post');
      }
    else{
        $data = Post::where('id','=',$id)->firstorFail();
              if($data == null){
                  return view('posts.edit-post');
              }
              elseif($data->user_id != $me->id){
                  return redirect()->to('/home')->with('alerts','No Permitido');
              }
      return view('posts.edit-post',['alerts'=>$alerts,'data'=>$data,]);
    }
  }
  public function getDeletepost() {

    $input = Input::all();
    $post = Post::where('id','=',$input['id'])->firstorFail();
        if($post == null){
          return view('posts.edit-post');
          }
          elseif($post->user_id == $input['login']){
            $post->delete();
            return redirect()->to('/home')->with('alerts','Post Eliminado');
            }
          else{
            return redirect()->to('/home')->with('alerts','No Permitido');
          }
  }
}
