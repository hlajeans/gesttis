@extends('auth.layouts.aapp')

@section('title', 'Create')

@section('content')
@include('header')
<form action="{{route('sprints.store')}}" method="POST" enctype="multipart/form-data" class="bg-white w-1/3 p-4 border-white-100 shadow-x1 rounded-lg ">
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
            <input class="form-control" type="date" class="form-control-file" name="inicioIteracion">
        </div>

        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Fin</label>
            <input class="form-control" type="date" class="form-control-file" name="finIteracion">
        </div>
        <!-- <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Nota</label>
            <input class="form-control" type="text" class="form-control-file" name="nota">
        </div> -->

        <div class="row featurette">
            <div class="col-md-20 order-md-2">
                <h2 class="fs-5 featurette-heading ">NOTA<span class="text-muted"></span></h2>
                <p class="fs-6 lead fst-italic">Cada fecha de finalización de Sprint según lo comprometido en su Propuesta Técnica debe presentarse la siguiente documentación:
                    <br>a) PARA EL ROL DOCENTE: Análisis (Historias de Usuario), Diseño (Interfaces (Moockups) y modelo de base de datos), Implementación (screenshoots de los prototipos (software desarrollado) con pequeña reseña de funcionamiento no mas de un párrafo), Pruebas (Unitarias, Integración, Sistema), además de Burndown y Retrospectiva.</br>
                    b) PARA EL ASESOR: Actas de reuniones, Evaluación individual (elaborada por cada integrante) y evaluación grupal (elaborada por el Scrum Master) según formularios adjuntos.
                    <br>c) PARA EL CLIENTE: Pruebas de aceptación.</br>
                </p>
            </div>
        </div>

        <div class="mb-3">
            <label for="inputPassword4" class="form-label">Subir PDF "Sprint""</label>
            <input type="file" accept=".pdf" class="form-control" name="file" aria-label="file example" required>
            <div class="invalid-feedback">Subir PDF "Sprint"</div>
        </div>

        <div class="class=" col-12 mb-3">
            <button class="btn btn-success" type="submit">Actualizar</button>

        </div>
    </div>
</form>

@endsection