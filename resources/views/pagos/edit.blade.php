@extends('layouts.aapp')

@section('title', 'Edit')

@section('content')
<form action="{{route('pagos.update', $pago->id)}}" method="POST"
class="bg-black w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg">
@csrf
@method('put')
<h2 class="text-2x1 text-center py-4 mb-4 font-semibold">
    Editar  plan de pagos{{ $pago->id }}  
</h2>
<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
placeholder="nombreGrupo" name"nombreGrupo" value={{$pago->nombreGrupo}}>

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
placeholder="numeroIteracion" name="numeroIteracion" value={{$pago->numeroIteracion}}>

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
placeholder="totalPagar" name="totalPagar" value={{$pago->totalPagar}}>

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
placeholder="porcentajeIteracion" name="porcentajeIteracion" value={{$pago->porcentajeIteracion}}>

<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
placeholder="montoPagar" name="montoPagar" value={{$pago->montoPagar}}>

<button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold ">Publicar</button>
</form>
@endsection