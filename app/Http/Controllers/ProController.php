<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;
use RealRashid\SweetAlert\Facades\Alert;
use Laracasts\Flash\Flash;


class ProController extends Controller
{
    public function Main()
    {
        return view('_projects.index');
    }

    public function CreateProject(Request $request)
    {

      project::create([
          'name' => $request->name,
          'description' => $request->description,
          'buy' => $request->value,
          'duration' => $request->date
      ]);

      Flash::success('Projeto criado com sucesso!!');

      return redirect()->back();
        
    }
    
}
