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
        // dd ('hola');
    }

    public function store(Request $request){
        // $sprint =new Sprint();
        // $sprint->nombreGrupo = $request->nombreGrupo;
        // $sprint->numeroIteracion = $request->numeroIteracion;
        // $sprint->inicioIteracion = $request->inicioIteracion;
        // $sprint->finIteracion = $request->finIteracion;
        // return $request->all();
        $input=$request->except('_token');
        if($request->hasfile('file')){
            
            // $archivo=$request->file('file');
            // $input ['documento']=time().'_'.$archivo->getClientOriginalName();
            $path= $request->file('file')->store('uploads','public');
            // $archivo->move(public_path('Archivos'),$input['documento']);
            $input['documento'] =substr($path, 8);
        }
        
        Sprint::create($input);
        $sprints=Sprint::all();
        // return view('sprints.index',compact('sprints'));
        return redirect('sprints');
    }

    public function showfile( $namefile){
        $path=storage_path().'/app/public/uploads'."/".$namefile;
        // dd($path);
        return response()->file($path);

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
