@extends('auth.layouts.app')

@section('title', 'Edit')

@section('content')
<form action="{{route('sprints.update', $pago->id)}}" method="POST" class="bg-white w-1/3 p-4 border-white-100 shadow-x1 rounded-lg">
    @csrf
    @method('put')
    <h2 class="text-2x1 text-center py-4 mb-2 font-semibold">
        EDITAR PLAN DE PAGOS 
    </h2>
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-5" style="margin: 0 auto;">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nombre Grupo Empresa</label>
                        <input class="form-control"  name"nombreGrupo" value={{$sprint->nombreGrupo}}>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Numero de Sprint</label>
                        <input class="form-control"  name="numeroIteracion" value={{$sprint->numeroIteracion}}>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Inicio</label>
                        <input class="form-control"  name="inicioIteracion" value={{$sprint->totalPagar}}>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Fin</label>
                        <input class="form-control" name="finIteracion" value={{$sprint->porcentajeIteracion}}>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nota</label>
                        <input class="form-control"  name="nota" value={{$sprint->montoPagar}}>
                    </div>






                    <button type="submit" class="btn-primary my-3 w-full bg-blue-500 p-2 font-semibold ">Publicar</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection