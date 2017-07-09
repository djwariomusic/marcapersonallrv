<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function postCreatecomment() {
        return "Crearmos el comentario";
    }

    public function getDeletecomment($id) {
        return "Borramos el comentario";
    }
}
