<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentsController extends Controller
{
  public function showIntro(){
    return View('documents.1-11');
  }
  public function showRequeriments(){
    return View('services');
  }
}
