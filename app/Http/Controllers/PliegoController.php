<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pliego;

class PliegoController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pliegos=Pliego::all();
        return view('pliegos.index',compact('pliegos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pliegos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos = 
            ['titulo'=> 'required ',
            'sismat'=> 'required',
            'semestre'=> 'required '];
            $mensaje = ['titulo.required' => 'El campo Titulo es obligatorio',
            'sismat.required' => 'El campo Codigo-Pliego es obligatorio',
            'semestre.required' => 'El campo Semestre es obligatorio'
            ];
    
            $this->validate($request,$campos,$mensaje);

        $input=$request->except('_token');
            if($request->hasfile('file')){
                
                // $archivo=$request->file('file');
                // $input ['documento']=time().'_'.$archivo->getClientOriginalName();
                $path= $request->file('file')->store('uploads','public');
                // $archivo->move(public_path('Archivos'),$input['documento']);
                $input['documento'] =substr($path, 8);
            }  
            
            Pliego::create($input);

            $pliegos=Pliego::all();
        // return view('pliegos.index',compact('pliegos'));
        return redirect('pliegos');
    }

    
    public function showfile( $namefile){
        $path=storage_path().'/app/public/uploads'."/".$namefile;
        // dd($path);
        return response()->file($path);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pliego=Pliego::find($id);
        return view('pliegos.edit',compact('pliego'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pliego=Pliego::find($id);
        $pliego->update($request->all());
        return redirect()->route('pliegos.index')->with('success','pliego actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pliego=Pliego::find($id);
        $pliego->delete();
        return redirect()->route('pliegos.index')->with('success','pliego eliminado');
    }
}
