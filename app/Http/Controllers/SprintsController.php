<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sprint;

class SprintsController extends Controller
{
    public function index(){

        $sprints = Sprint::all();
        
        return view('sprints.index', compact('sprints')) ;
    }

    public function create(){

        return view('sprints.create');
        
    }


    public function show($id){
        dd ('hola');
    }

    public function store(Request $request){
        $sprint =new Sprint();
        $sprint->nombreGrupo = $request->nombreGrupo;
        $sprint->numeroIteracion = $request->numeroIteracion;
        $sprint->inicioIteracion = $request->inicioIteracion;
        $sprint->finIteracion = $request->finIteracion;

        $documento='';
        // dd ($request->all());
        if($request->hasfile('file')){
            
            $archivo=$request->file('file');
            $documento=time().'_'.$archivo->getClientOriginalName();
            
            $archivo->move(public_path('Archivos'),$documento);
        }
        $sprint->documento=$documento;
        $sprint->save();
        return redirect()->route('sprints.index');
    }

    public function edit ($id){
        $sprint = Sprint::find($id);
        return view ('sprints.edit', compact('sprint'));
    }

    public function update(Request $request, $id){
        $sprint = Sprint::find($id);
        $sprint->update($request->all());
        return redirect()->route('sprints.index');

    }

    public function destroy($id){
        $sprint = Sprint::find($id);
        $sprint->delete();
        return redirect()->route('sprints.index');
    }
}
