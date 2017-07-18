<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showindex(){
      return View('index');
    }
    public function showservices(){
      return View('services');
    }
    public function showportfolio(){
      return View('portfolio');
    }
    public function showcontact(){
      $alerts= NULL;
      return View('contact',['alerts'=>$alerts]);
    }
    public function showblog(){
      return View('blog');
    }
}
