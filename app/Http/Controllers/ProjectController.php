<?php

namespace App\Http\Controllers;

use App\Projects;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
  public function getList() {
    $projects= Projects::where('status', 1)->get();
    $projects= Projects::where('status', 1)->orderBy('idproject','desc')->Paginate(5);
    return view('portfolio', ['projects'=> $projects]);
  }

  public function showlistprojects(){
    $projects = Projects::orderby('idproject','desc')->Paginate(5);
    return view('adminlte::projects.listprojects',['projects'=>$projects]);
  }

  public function showproject($id){
    $project = Projects::where('idproject',$id)->first();
    return view('adminlte::projects.edit-project',['project'=>$project]);
  }

  public function delproject(){
    $input = Input::all();
    $project = Projects::where('idproject','=',$input['idproject'])->firstorFail();
        if($project == null){
          return view('adminlte::projects.listprojects');
          }
          else{
            $project->delete();
            return redirect()->to('/home')->with('alerts','El Proyecto fue eliminado');
          }
  }
}
