<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{

  public function getList() {
    $data['posts'] = Post::where('status', 1)->get();
    $data['posts']= Post::latest()->Paginate(5);
  return view('blog', $data);
  }
  public function getPost($id) {
    $post = Post::find($id);

    if($post == null)
        return 'No existe el post';
    else {
        $data['post'] = $post;
        $data['comments'] = Comment::where('post_id', $id)->get();
        return view('posts.post', $data);
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
    $post->save(); // Guarda el objeto en la BD
    return "Post guardado";
  }
  public function getEditpost($id = null) {
    if ($id == null)
        return view('posts.edit-post');
    else {
        $data['post'] = Post::find($id);
        if($data['post'] == null)
            return 'El post no existe';

        return view('posts.edit-post', $data);
    }
  }
  public function getDeletepost($id) {
    $post = Post::find($id);

        if($post == null)
            return "No existe este post";
        else
            $post->delete();
 }
}
