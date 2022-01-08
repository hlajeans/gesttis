@extends('auth.layouts.aapp')

@section('title', 'Home')

@section('content')

@include('header')
<div class="container">
    <div class="col-12">
        <div class="row">
            <h2 class="text-center p-2">LISTA DE PLAN DE SPRINTS</h2>
            <div>
                @if(Auth::user()->rol==1 | Auth::user()->rol==2)
                <div class="float-rid">
                    <a class="btn btn-success" href="{{ route('sprints.create') }}">Registrar</a>
                </div>
                @endif

                <table class="table table-bordered">
                    <thead>

                        <tr class="bg-blue-500 text-black">
                            <th class="w-20 py-4 ...">ID</th>
                            <th class="w-1/8 py-4 ...">Nombre de Grupo-Empresa</th>
                            <th class="w-1/16 py-4 ...">Numero de Sprint</th>
                            <th class="w-1/16 py-4 ...">Inicio </th>
                            <th class="w-1/16 py-4 ...">Fin</th>
                            <!-- <th class="w-1/16 py-4 ...">Nota</th> -->
                            <th class="w-1/16 py-4 ...">Creado</th>
                            <th class="w-1/16 py-4 ...">Actualizado</th>
                            <th class="w-28 py-4 ...">Documento</th>
                        </tr>

                    </thead>
                    <tbody>

                        <?php $id = 0;

                        ?>
                        @foreach ($sprints as $row)


                        <tr>
                            <td class="py-3 px-6"><?php $id++;echo $id; ?></td>
                            <td class="p-3 ">{{$row->nombreGrupo}}</td>
                            <td class="p-3 ">{{$row->numeroIteracion}}</td>
                            <td class="p-3 ">{{$row->inicioIteracion}}</td>
                            <td class="p-3 ">{{$row->finIteracion}}</td>
                            <!-- <td class="p-3 ">{{$row->nota}}</td> -->
                            <td class="p-3 text-center"> {{$row->created_at}}</td>
                            <td class="p-3 text-center"> {{$row->updated_at}}</td>
                            <td>
                            @if(Auth::user()->rol==1 | Auth::user()->rol==2)
                                <form action="{{route('sprints.destroy',$row->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="bg-red-500 text-white px-3 py-1 rounded-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                
                                <div>
                                    <a href="{{route('sprints.edit', $row->id)}}" class="btn text-white btn-warning">
                                        <i class="fa fa-pencil"></i></a>
                                </div>
                                @endif

                            </td>
                            <td>
                                <a href="{{@$row->PathFile}} " class="btn btn-danger" target="_blank">Ver Documento</a>
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