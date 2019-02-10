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
      return redirect()->to('/home')->with('alerts','Comentario Creado');

    }

    public function getDeletecomment($id) {
      $comment = Comment::find($id);
      if($comment == null)
          return 'El comentario no existe';
      else
          $comment->delete();
                return redirect()->to('/home')->with('alerts','Comentario Eliminado');
      }

      public function buscarincidencias(){
        $variable1=NULL;
        $variable2=NULL;
        $variable3="HOLA";
        $variable4=NULL;
        $variable5=NULL;
        $variable5=NULL;

        $a1=0;
        $a2=0;
        $a3=0;
          if($variable1==NULL){
            # code...
            $a1=0;
          }
          elseif($variable1!=NULL ){
            # code...
            $a1=1;
          }
          else{
            # code...
            $a1=2;
          }
          if($variable2==NULL){
            # code...
            $a2=0;//int 0
          }
          elseif($variable2!=NULL ){
            # code...
            $a2=1;
          }
          else{
            # code...
            $a2=2;
          }
          if($variable3==NULL){
            # code...
            $a3=0;
          }
          elseif($variable3!=NULL ){
            # code...
            $a3=1;
          }
          else{
            # code...
            $a3=2;
          }
          dd($a1,$a3);

}
}
