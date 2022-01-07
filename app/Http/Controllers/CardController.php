<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carta['cards'] = Card::paginate(10);
        return view('card.index',$carta);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('card.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos = [
            'Titulo' => 'required|string|max:50|unique:cards,Titulo',
            'Descripcion' => 'required|string|max:200',
            'Link' => 'required',
            'Modo' => 'required',
            'Archivo'  => 'required'

        ];

        $mensaje = [
            'Titulo.required' => 'El :attribute es requerido',
            'Descripcion.required' => 'La :attribute es requerido',
            'Link.required' => 'El :attribute es requerido',
            'Archivo.required' => 'El :attribute es requerido',
            'Modo.required' => 'El :attribute es requerido'

        ];

        $this->validate($request,$campos,$mensaje);

        $datoscards = request()->except('_token');
        if($request->hasFile('Archivo')){
            $datoscards['Archivo']= $request->file('Archivo')->store('uploads','public');
        }
             
        Card::insert($datoscards);
        return redirect('card')->with('mensaje','Tarjeta añadida!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $card= Card::find($id);
        return view('card.show',compact('card'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $card = Card::findOrFail($id);
        return view('card.edit',compact('card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $campos = [
            
            'Titulo' => 'required|string|max:50',
            'Descripcion' => 'required|string|max:200',
            'Link' => 'required',
            'Modo' => 'required',
            'Archivo'  => 'required'
        ];

        $mensaje = [
            'required' => 'El :attribute es requerido'
            //'Nombre.unique' => 'El nombre ingresado ya se encuentra registrado',
            //'NombreCorto.unique' => 'El nombre corto ingresado ya se encuentra registrado'
        ];
        $this->validate($request,$campos,$mensaje);

        $datosCard= request()->except(['_token','_method']);

        Card::where('id' ,'=', $id ) -> update($datosCard);
        $card = Card::findOrFail($id);
        //return view('grupoempresa.edit',compact('gp'));
        return redirect('card')->with('mensaje','Tarjeta editada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $card=Card::findOrFail($id);
            Card::destroy($id);
        return redirect('card')->with('mensaje','Tarjeta eliminada!');
    }
}
