<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contratos=Contrato::all();
        return view('contrato.index',compact('contratos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contrato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input=$request->except('_token');
        if($request->hasfile('file')){
            
            // $archivo=$request->file('file');
            // $input ['documento']=time().'_'.$archivo->getClientOriginalName();
            $path= $request->file('file')->store('uploads','public');
            // $archivo->move(public_path('Archivos'),$input['documento']);
            $input['documento'] =substr($path, 8);
        }
        
        Contrato::create($input);
        $contratos=Contrato::all();
        // return view('contrato.index' ,compact('contratos'));
        return redirect('contrato');
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
