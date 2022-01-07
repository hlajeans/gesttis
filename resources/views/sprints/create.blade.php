@extends('auth.layouts.aapp')

@section('title', 'Create')

@section('content')

<form action="{{route('sprints.store')}}" method="POST" class="bg-white w-1/3 p-4 border-white-100 shadow-x1 rounded-lg">
    @csrf
    <h2 class="text-center p-2">NUEVO PLANIFICACION DE SPRINTS</h2>
    <div class="col-5" style="margin: 0 auto;">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nombre Grupo Empresa</label>
            <input class="form-control" type="text" class="form-control-file" name="nombreGrupo">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Numero de Sprint</label>
            <input class="form-control" type="text" class="form-control-file" name="numeroIteracion">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Inicio </label>
            <input class="form-control" type="text" class="form-control-file" name="inicioIteracion">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Fin</label>
            <input class="form-control" type="text" class="form-control-file" name="finIteracion">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nota</label>
            <input class="form-control" type="text" class="form-control-file" name="nota">
        </div>
        <div class="class=" col-12 mb-3">
            <button class="btn btn-success" type="submit">Actualizar</button>

        </div>
    </div>
</form>

@endsection