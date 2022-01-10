<?php

namespace App\Http\Controllers;

use App\Models\GrupoEmpresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class GrupoEmpresaController extends Controller
{
    /**
     * Controlador Grupo Empresas
     * 
     * Se despliega las funciones disponibles para las 
     * grupo empresas.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Funcion por defecto para las grupo empresas,
     * ademas de la funcion "Buscar Grupo Empresas"
     */
    public function index(Request $request)
    {
        /*return view('index');
        $datos['grupoempresas']=GrupoEmpresa::paginate(7);
        return view('grupoempresa.index', $datos);
        */
        $texto = trim($request->get('texto'));
        $grupoempresas = DB::table('grupo_empresas')
        ->select('id','Nombre','NombreCorto','TipoSociedad','Direccion','Correo','Telefono','Representante')
        ->where('Nombre','LIKE','%'.$texto.'%')
        ->orWhere('NombreCorto','LIKE','%'.$texto.'%')
        ->orderBy('Nombre','asc')
        ->paginate(100);
        return view('grupoempresa.index',compact('grupoempresas','texto'));
    }

    /**
     * Muestra el formulario para registrar una nueva grupo empresa.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grupoempresa.create');
    }

    /**
     * Almacena los datos ingresados para guardar una grupo empresa
     * en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos = [
            'Nombre' => 'required|string|max:100|unique:grupo_empresas,Nombre',
            'NombreCorto' => 'required|string|max:100|unique:grupo_empresas,NombreCorto',
            'TipoSociedad' => 'required|string|max:100',
            'Logo' => 'required|mimes:jpeg,png,jpg',
            'Correo' => 'required|email',
            'Telefono' => 'required|string|max:100',
            'Direccion' => 'required|string|max:100',
            'Representante' => 'required|string|max:100',
            'Socio1' => 'required|string|max:100',
            'Socio2' => 'required|string|max:100',
            'Socio3' => 'max:100',
            'Socio4' => 'max:100',

        ];

        $mensaje = [
            'required' => 'El :attribute es requerido',
            'Logo.required' => 'El logo de la empresa es requerido',
            'Nombre.unique' => 'El nombre de la grupo empresa ingresada ya se encuentra registrado',
            'NombreCorto.unique' => 'El nombre corto ingresado ya se encuentra registrado'
        ];

        $this->validate($request,$campos,$mensaje);


        $datosgrupo = request()->except('_token');
        
        if($request->hasFile('Logo')){
            $datosgrupo['Logo']=$request->file('Logo')->store('uploads','public');
        }
             
        GrupoEmpresa::insert($datosgrupo);
        return redirect('grupoempresa')->with('mensaje','Grupoempresa añadida!');
    }

    /**
     * Muestra una grupo empresa en especifico.
     *
     * @param  \App\Models\GrupoEmpresa  $grupoEmpresa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grupoe= GrupoEmpresa::find($id);
        return view('grupoempresa.show',compact('grupoe'));
    }

    /**
     * Muestra el formulario para editar una grupo empresa 
     * en especifico.
     *
     * @param  \App\Models\GrupoEmpresa  $grupoEmpresa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gp = GrupoEmpresa::findOrFail($id);
        return view('grupoempresa.edit',compact('gp'));
    }

    /**
     * Actualiza los datos de una grupo empresa a partir de 
     * lo ingresado en la funcion edit.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GrupoEmpresa  $grupoEmpresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos = [
            
            'Nombre' => 'required|string|max:100'/**|unique:grupo_empresas,Nombre,{this->grupo_empresa->id}'**/,
            'NombreCorto' => 'required|string|max:100'/**|unique:grupo_empresas,NombreCorto,{this->grupo_empresa->id}'**/,
            'TipoSociedad' => 'required|string|max:100',
            'Correo' => 'required|email',
            'Telefono' => 'required|string|max:100',
            'Direccion' => 'required|string|max:100',
            'Representante' => 'required|string|max:100',
            'Socio1' => 'required|string|max:100',
            'Socio2' => 'required|string|max:100',
            'Socio3' => 'max:100',
            'Socio4' => 'max:100',
        ];

        $mensaje = [
            'required' => 'El :attribute es requerido'
            //'Nombre.unique' => 'El nombre ingresado ya se encuentra registrado',
            //'NombreCorto.unique' => 'El nombre corto ingresado ya se encuentra registrado'
        ];
        if($request->hasFile('Logo')){
            $campos = ['Logo' => 'required|mimes:jpeg,png,jpg'];
        
        $mensaje = ['Logo.required' => 'El logo de la empresa es requerido'];
            
        }
        $this->validate($request,$campos,$mensaje);

        $datosGrupoEmpresa= request()->except(['_token','_method']);

        if($request->hasFile('Logo')){
            $gp = GrupoEmpresa::findOrFail($id);
            Storage::delete('public/'.$gp->Logo);
            $datosGrupoEmpresa['Logo']=$request->file('Logo')->store('uploads','public');

        }
        GrupoEmpresa::where('id' ,'=', $id ) -> update($datosGrupoEmpresa);
        $gp = GrupoEmpresa::findOrFail($id);
        //return view('grupoempresa.edit',compact('gp'));
        return redirect('grupoempresa')->with('mensaje','Grupoempresa editada!');
    }   

    /**
     * Remueve una grupo empresa en especifico.
     *
     * @param  \App\Models\GrupoEmpresa  $grupoEmpresa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grupoempresa=GrupoEmpresa::findOrFail($id);

        if(Storage::delete('public/'.$grupoempresa->Logo)){
            GrupoEmpresa::destroy($id);
        }
        return redirect('grupoempresa')->with('mensaje','Grupoempresa eliminada!');
    }
}