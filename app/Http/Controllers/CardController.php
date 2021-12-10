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
            'Archivo'  => 'required'

        ];

        $mensaje = [
            'Titulo.required' => 'El :attribute es requerido',
            'Descripcion.required' => 'La :attribute es requerido',
            'Archivo.required' => 'El :attribute es requerido'
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
    public function edit(Card $card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        //
    }
}
