<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CommentController extends Controller
{
    public function postCreatecomment() {
      $input = Input::all();
      $comment = new Comment();

      $comment->username = $input['user'];
      $comment->text = $input['comment'];
      $comment->post_id = $input['post_id'];
      $comment->save();
      return 'Comentario creado!';
    }

    public function getDeletecomment($id) {
      $comment = Comment::find($id);
      if($comment == null)
          return 'El comentario no existe';
      else
          $comment->delete();
          return 'Comentario eliminado';
      }

}
