<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{
  public function getList() {
      return "Lista de todos los post por GET";
  }
  public function getPost($id) {
      return "Ver post, se pasa como parámetro la ID para buscarlo";
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
        return view('edit-post');
    else {
        $data['post'] = Post::find($id);
        if($data['post'] == null)
            return 'El post no existe';

        return view('edit-post', $data);
    }
  }
  public function getDeletepost($id) {
      return "Borrar Post, ID para saber cual es.";
  }
}
