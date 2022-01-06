@extends('auth.layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="col-12">
        <div class="row">
            <h2 class="text-center p-2">LISTA DE PLAN DE PAGOS</h2>
            <div>
                <div class="float-rid">
                    <a class="btn btn-success" href="{{ route('pagos.create') }}">Registrar</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr class="bg-blue-500 text-black">
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

                        <?php $id = 0;

                        ?>
                        @foreach ($pagos as $row)

                        <tr>
                            <td class="py-3 px-6"><?php $id++;
                                                    echo $id; ?></td>
                            <td class="p-3 ">{{$row->nombreGrupo}}</td>
                            <td class="p-3 ">{{$row->numeroIteracion}}</td>
                            <td class="p-3 ">{{$row->totalPagar}}</td>
                            <td class="p-3 ">{{$row->porcentajeIteracion}}</td>
                            <td class="p-3 ">{{$row->montoPagar}}</td>
                            <td class="p-3 text-center"> {{$row->created_at}}</td>
                            <td class="p-3 text-center"> {{$row->updated_at}}</td>
                            <td>

                                <form action="{{route('pagos.destroy',$row->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <div>
                                        <button class="bg-red-500 text-white px-3 py-1 rounded-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                </form>
                                <div>
                                    <a href="{{route('pagos.edit', $row->id)}}" class="btn text-white btn-warning">
                                        <i class="fa fa-pencil"></i></a>
                                </div>


                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection