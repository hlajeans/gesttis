<?php

namespace App\Http\Controllers;

use App\Models\Planificacion;
use Illuminate\Http\Request;

class PlanificacionController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planificaciones=Planificacion::all();
        return view('planificacion.index',compact('planificaciones'));

        // $test = planificacion::find(1);
        // dd($test->PathFile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planificacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $campos = ['representante'=> 'required ',
        'nombre'=> 'required ',
        'correo'=> 'required '
        ]; $mensaje = ['representante.required' => 'El campo, Representante-Legal, es obligatorio',
        'nombre.required' => 'El campo, Nombre-Grupo-Empresa, es obligatorio',
        'correo.required' => 'El campo, Correo, es obligatorio'
        ];
        $this->validate($request,$campos,$mensaje);

        $input=$request->except('_token');
        $files = $request->file;
        $flag = 0;
        foreach ($files as $file) {
            if($flag==0){
            $path= $file->store('uploads','public');
            $input['documento'] =substr($path, 8);
            }
            else if($flag != 0){
            
            $path2=  $file->store('uploads','public');
            $input['documento2'] =substr($path2, 8);
            }
            $flag++;
        } 
        unset($input['file']);
        $plani = Planificacion::create($input);
        

        if($plani){
            return redirect('planificacion');
        }else{
            return redirect()->back();
        }
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
        return view('planificacion.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planificacion=Planificacion::find($id);

        // dd($planificacion);
        return view('planificacion.edit',compact('planificacion'));

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
        $input=$request->all();
        $files = $request->file;
        $flag = 0;
        foreach ($files as $file) {
            if($flag==0){
            $path= $file->store('uploads','public');
            $input['documento'] =substr($path, 8);
            }
            else if($flag != 0){
            
            $path2=  $file->store('uploads','public');
            $input['documento2'] =substr($path2, 8);
            }
            $flag++;
        } 
        unset($input['file']);
        $planificacion=Planificacion::find($id);
        $planificacion->update($input);
        return redirect()->route('planificacion.index')->with('success','planificacion actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $planificacion=Planificacion::find($id);
        $planificacion->delete();
        return redirect()->route('planificacion.index')->with('success','planificacion eliminada');
    }
}
