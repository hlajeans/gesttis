@extends('layouts.aapp')

@section('title', 'Create')

@section('content')
<form action="{{route('pagos.store')}}" method="POST"
class="bg-black w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg">
@csrf
<h2 class="text-center p-2">Nuevo plan de pagos</h2>
<div class="col-5" style="margin: 0 auto;"> 
    <div class="mb-3">  
        <label for="formGroupExampleInput" class="form-label">Nombre Grupo Empresa</label>
        <input class="form-control" type="text" class="form-control-file"
         name"nombreGrupo">
    </div>
    <div class="mb-3"> 
        <label for="formGroupExampleInput" class="form-label">Numero de Sprint</label>
        <input class="form-control" type="text" class="form-control-file"
         name="numeroIteracion">
    </div>

    <div class="mb-3"> 
        <label for="formGroupExampleInput" class="form-label">Total a pagar por el proyecto</label>
        <input class="form-control" type="text" class="form-control-file" 
        name="totalPagar">
    </div>
    
    <div class="mb-3"> 
        <label for="formGroupExampleInput" class="form-label">porcentaje a cobrar en Sprint</label>
        <input class="form-control" type="text" class="form-control-file" 
         name="porcentajeIteracion">
    </div> 
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Monto a pagar en Sprint</label>
        <input class="form-control" type="text" class="form-control-file" 
        name="montoPagar">
    </div> 
    <div class="class="col-12   mb-3">
        <button class="btn btn-success" type="submit">Actualizar</button>
        
    </div>
</div>
</form>

@endsection