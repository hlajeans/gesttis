<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CardController extends Controller
{
    /**
     * Controlador Card
     * 
     * Se despliega la lista de recursos disponibles
     * para el tablero de actividades y sus tarjetas.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Funcion por defecto
     */
    public function index()
    {
        $carta['cards'] = Card::paginate(100);
        return view('card.index',$carta);
    }

    /**
     * Muestra la forma para crear una nueva tarjeta.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('card.create');

    }

    /**
     * Almacena la informacion a guardar de las tarjetas en la base de datos.
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
     * Muestra los detalles de una tarjeta.
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
     * Muestra el formulario de edicion de una tarjeta (editar).
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
     * Actualiza los datos existentes de una tarjeta en la base de datos
     * por otros que se incluyen en la funcion edit.
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
        if($request->hasFile('Archivo')){
            $campos = ['Archivo' => 'required'];
        
        $mensaje = ['Archivo.required' => 'El archivo es requerido'];
        }
        $this->validate($request,$campos,$mensaje);

        $datosCard= request()->except(['_token','_method']);
        if($request->hasFile('Archivo')){
            $tarj = Card::findOrFail($id);
            Storage::delete('public/'.$tarj->Archivo);
            $datosCard['Archivo']=$request->file('Archivo')->store('uploads','public');

        }

        Card::where('id' ,'=', $id ) -> update($datosCard);
        $card = Card::findOrFail($id);
        //return view('grupoempresa.edit',compact('gp'));
        return redirect('card')->with('mensaje','Tarjeta editada correctamente!');
    }

    /**
     * Elimina una tarjeta del tablero.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $card=Card::findOrFail($id);
            Card::destroy($id);
        return redirect('card')->with('mensaje','Tarjeta eliminada correctamente!');
    }
}
