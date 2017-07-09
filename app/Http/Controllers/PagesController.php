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
      return View('contact');
    }
    public function showblog(){
      return View('blog');
    }
}
