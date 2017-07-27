<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentsController extends Controller
{
  public function show111(){
    return View('documents.1-11');
  }
  public function show114(){
    return View('documents.1-14');
  }
  public function show221(){
    return View('documents.2-21');
  }
  public function show229(){
    return View('documents.2-29');
  }
  public function show331(){
    return View('documents.3-31');
  }
}
