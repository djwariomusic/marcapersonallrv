<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Image;

class StorageController extends Controller
{
    public function store(Request $request)
    {
        $input = Input::all();
        $path = $request->file->store('public');
        $image = new Image();
        $image->idproject = $input['idproject'];
        $image->path = $path;
        $image->save();
        return redirect()->to('/home')->with('alerts','Proyecto Guardado');
    }
}
