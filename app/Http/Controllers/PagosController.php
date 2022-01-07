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
