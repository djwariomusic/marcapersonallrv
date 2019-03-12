<?php

namespace App\Http\Controllers;

use App\Projects;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProjectController extends Controller
{
  public function getList() {
    $projects= Projects::where('status', 1)->get();
    $projects= Projects::where('status', 1)->orderBy('idproject','desc')->Paginate(5);
    $projects2= Projects::where('status', 1)->orderBy('idproject','desc')->get();;
    return view('portfolio', ['projects'=> $projects, 'projects2'=> $projects2]);
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

  public function createproject() {
    $project = new Projects();
    $project->name = $input['name'];
    $project->enterprise = $input['enterprise'];
    $project->url = $input['url'];
    $project->urlgaleria = $input['urlgaleria'];
    $project->description = $input['description'];
    $project->technology = $input['technology'];
    $project->participation = $input['participation'];
    $project->status = $input['status'];
    $project->save(); // Guarda el objeto en la BD
    return redirect()->to('/home')->with('alerts','Proyecto Guardado');
  }

  public function saveproject() {
    $input = Input::all();

    if($input['idproject'] == NULL) {
        return view('adminlte::projects.listprojects');
    }
    else {
    $project = Projects::where('idproject','=',$input['idproject'])->firstorFail();

    $project->name = $input['name'];
    $project->enterprise = $input['enterprise'];
    $project->url = $input['url'];
    $project->urlgaleria = $input['urlgaleria'];
    $project->description = $input['description'];
    $project->technology = $input['technology'];
    $project->participation = $input['participation'];
    $project->status = $input['status'];
    $project->save(); // Guarda el objeto en la BD
    return redirect()->to('/home')->with('alerts','Proyecto Actualizado');
    }
  }
}
