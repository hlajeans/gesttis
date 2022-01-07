@extends('auth.layouts.app')

@section('title', 'Edit')

@section('content')


<form action="{{route('pagos.update', $pago->id)}}" method="POST" class="bg-white w-1/3 p-4 border-white-100 shadow-x1 rounded-lg">
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
                        <input class="form-control" placeholder="nombreGrupo" name"nombreGrupo" value={{$pago->nombreGrupo}}>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Numero de Sprint</label>
                        <input class="form-control" placeholder="numeroIteracion" name="numeroIteracion" value={{$pago->numeroIteracion}}>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Total a pagar por el proyecto</label>
                        <input class="form-control" placeholder="totalPagar" name="totalPagar" value={{$pago->totalPagar}}>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">porcentaje a cobrar en Sprint</label>
                        <input class="form-control" placeholder="porcentajeIteracion" name="porcentajeIteracion" value={{$pago->porcentajeIteracion}}>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Monto a pagar en Sprint</label>
                        <input class="form-control" placeholder="montoPagar" name="montoPagar" value={{$pago->montoPagar}}>
                    </div>






                    <button type="submit" class="btn-primary my-3 w-full bg-blue-500 p-2 font-semibold ">Publicar</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection