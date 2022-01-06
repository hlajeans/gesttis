<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SprintsController extends Controller
{
    public function index(){
        $pagos=Sprint::all();
        return view('sprints.index', compact('sprints')) ;
    }
    public function create(){
        return view('sprints.create');
    }
    public function store(Request $request){
        $sprint =new Sprint();
        $sprint->nombreGrupo = $request->nombreGrupo;
        $sprint->numeroIteracion = $request->numeroIteracion;
        $sprint->inicioIteracion = $request->inicioIteracion;
        $sprint->finIteracion = $request->finIteracion;
        $pago->nota = $request->nota;
        $pago->save();
        return redirect()->route('sprints.index');
    }

    public function edit ($id){
        $sprint = Sprint::find($id);
        return view ('sprints.edit', compact('sprint'));
    }

    public function update(Request $request, $id){
        $sprint = sprint::find($id);
        $sprint->update($request->all());
        return redirect()->route('sprints.index');

    }

    public function destroy($id){
        $sprint = Sprint::find($id);
        $sprint->delete();
        return redirect()->route('sprints.index');
    }
}
