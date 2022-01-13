<?php

namespace App\Http\Controllers;
use App\Models\Sobre;
use Illuminate\Http\Request;

class SobreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sobres.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos = ['sobreA'=> 'required ',
        'sobreB'=> 'required ',
        'fecha'=> 'required '
        ]; 
        $mensaje = ['sobreA.required' => 'El campo, SOBRE "A", es obligatorio',
        'sobreB.required' => 'El campo, SOBRE "B", es obligatorio',
        'fecha.required' => 'El campo, FECHAS DE PRESENTACION, es obligatorio'
        ];

        $this->validate($request,$campos,$mensaje);
        $input=$request->except('_token');

        Sobre::create($input);

        return view('vistaPrincipal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todosSobre = Sobre::all();
        $ultimoSobre = $todosSobre->last();
        
        return view('sobres.vista', compact('ultimoSobre'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
