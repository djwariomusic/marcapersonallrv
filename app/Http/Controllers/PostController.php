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
    $data= Post::where('status', 1)->get();
    $data= Post::with('user')->latest()->Paginate(5);

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
        $post = Post::find($input['post_id']);
    } else {
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
  public function getEditpost($id = null) {
  $alerts=NULL;
    if ($id == null){
        return view('posts.edit-post');
      }
    else {
        $data['post'] = Post::where('id','=',$id)->firstorFail();
        //$data['post'] = Post::where('id','=',$id)->where('user_id','=', Auth::check());
            if($data['post'] == null){
              return view('posts.edit-post');
              }
      return view('posts.edit-post',$data,['alerts'=>$alerts,]);
    }
  }
  public function getDeletepost($id) {
    $post = Post::find($id);

        if($post == null){
          return view('posts.edit-post');
          }
        else{
            $post->delete();
            return redirect()->to('/home')->with('alerts','Post Eliminado');
          }
 }
}
