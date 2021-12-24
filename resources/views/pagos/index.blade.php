@extends('layouts.aapp')

@section('title', 'Home')

@section('content')
<div>
    <table class="table table-striped table-dark">
        <thead>
            <tr class="bg-blue-500 text-white">
                <th class="w-20 py-4 ...">ID</th>
                <th class="w-1/8 py-4 ...">Nombre de Grupo-Empresa</th>
                <th class="w-1/16 py-4 ...">Numero de Sprint</th>
                <th class="w-1/16 py-4 ...">Total a pagar</th>
                <th class="w-1/16 py-4 ...">porcentajeIteracion</th>
                <th class="w-1/16 py-4 ...">montoPagar</th>
                <th class="w-1/16 py-4 ...">Creado</th>
                <th class="w-1/16 py-4 ...">Actualizado</th>
                <th class="w-28 py-4 ...">acciones</th>
            </tr>
          
        </thead>
        <tbody>
            @foreach ($pagos as $row)
                
            
          <tr>
            <td class="py-3 px-6">{{$row->id}}</td>
            <td class="p-3 ">{{$row->nombreGrupo}}</td>
            <td class="p-3 ">{{$row->numeroIteracion}}</td>
            <td class="p-3 ">{{$row->totalPagar}}</td>
            <td class="p-3 ">{{$row->porcentajeIteracion}}</td>
            <td class="p-3 ">{{$row->montoPagar}}</td>
            <td class="p-3 text-center"> {{$row->created_at}}</td>
            <td class="p-3 text-center"> {{$row->updated_at}}</td>
            <td >
             
            <form action="{{route('pagos.destroy',$row->id)}}" method="POST">
                    @csrf
                    @method('delete')
                <button class="bg-red-500 text-black px-3 py-1 rounded-sm">
                    <i class="fas fa-trash"></i>
                </button>
            </form>
                <a href="{{route('pagos.edit', $row->id)}}"class="btn btn-danger">
                    <i class="fas fa-pen"></i></a>
                
               
            </td>
            
          </tr>
          @endforeach
        </tbody>
      </table>
</div>        
                

@endsection