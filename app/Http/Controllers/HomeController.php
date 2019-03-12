<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;

use App\Projects;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function showPosts()
    {
        $data['posts'] = Post::where('status', 1)->get();
        $data['posts'] = Post::with('user')->orderBy('publish_date','desc')->Paginate(5);
        return view('adminlte::posts.viewpost',$data);
    }
    public function index()
    {
        return view('adminlte::home');
    }

    public function createproject()
    {
        return view('adminlte::projects.project');
    }

    public function showgallery()
    {
        $projects= Projects::where('status', 1)->orderBy('idproject','desc')->get();;
        return view('adminlte::projects.gallery',['projects'=> $projects]);
    }
}
