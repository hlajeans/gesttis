<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pago;

class PagosController extends Controller
{
   /* public function create (){
        return view ('pagos');
    }*/
    public function index(){
        
        $pagos=Pago::all();
        
        return view('pagos.index', compact('pagos')) ;
        
    }
    public function create(){
        return view('pagos.create');
    }
    public function show($id){
        dd ('hola');
    }
    public function store(Request $request){

        $campos = 
        ['nombreGrupo'=> 'required ',
        'numeroIteracion'=> 'required',
        'totalPagar'=> 'required ',
        'porcentajeIteracion'=> 'required',
        'montoPagar'=> 'required'];
        $mensaje = ['nombreGrupo.required' => 'El campo, Nombre Grupo Empresa, es obligatorio',
        'numeroIteracion.required' => 'El campo, Numero de Sprint, es obligatorio',
        'totalPagar.required' => 'El campo, Total a pagar por el proyecto, es obligatorio',
        'porcentajeIteracion.required' => 'El campo, Porcentaje a pagar en sprint, es obligatorio',
        'montoPagar.required' => 'El campo, Monto a pagar en Sprint, es obligatorio'  ];
        $this->validate($request,$campos,$mensaje);

        $pago =new Pago();
        $pago->nombreGrupo = $request->nombreGrupo;
        $pago->numeroIteracion = $request->numeroIteracion;
        $pago->totalPagar = $request->totalPagar;
        $pago->porcentajeIteracion = $request->porcentajeIteracion;
        $pago->montoPagar = $request->montoPagar;
        $pago->save();
        return redirect()->route('pagos.index');
    }

    public function edit ($id){
        $pago = Pago::find($id);
        return view ('pagos.edit', compact('pago'));
    }

    public function update(Request $request, $id){
        $pago = Pago::find($id);
        $pago->update($request->all());
        return redirect()->route('pagos.index');

    }

    public function destroy($id){
        $pago = Pago::find($id);
        $pago->delete();
        return redirect()->route('pagos.index');
    }

}
