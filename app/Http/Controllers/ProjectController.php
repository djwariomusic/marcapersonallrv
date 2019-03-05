<?php

namespace App\Http\Controllers;

use App\Projects;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
  public function getList() {
    $data= Projects::where('status', 1)->get();
    $data= Projects::where('status', 1)->orderBy('idproject','desc')->Paginate(5);
  return view('portfolio', ['projects'=> $data]);
  }
}
