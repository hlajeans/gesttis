<!--comment>
            Vista por defecto: Grupo Empresa
            Se muestra la vista por defecto cuando se 
            ingresa a la seccion principal de Grupo Empresas
</comment-->


  <!--comment>
            Creamos la logica para las alertas en la vista
    </comment-->
@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{Session::get('mensaje')}}
</div>
@endif



<!DOCTYPE html>
<head>
<title> Grupo Empresa | Gestion TIS </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!--comment>
            Importamos el header y creamos los botones 
            necesarios para acceso a la grupoempresa
    </comment-->
    @include('header')             
<br/>
<br/>
<div class="container">
<a href="{{route('card.index')}}" class="btn btn-dark">Mi Grupo Empresa</a>
<a href="{{url('/grupoempresa/create')}}" class="btn btn-dark">Registrar Grupo Empresa</a>
<br/>
<br/>
    <div class="col-xl-12"> 
        <form action="{{route('grupoempresa.index')}}" method="GET">
            <div class="row g-3">
                <div class="col-sm-4 my-1" >
                    <input type="text" class="form-control" placeholder="Ingrese un nombre..." name="texto" value="{{$texto}}">
                </div>

                <div class="col-auto my-1">
                    <input type="submit" class="btn btn-primary" value="Buscar">
                </div>
    
            </div>
        </form>
    </div>
<br/>
        <!--comment>
            Creamos la tabla para visualizar a las grupoempresas
        </comment-->
    <div class="table-responsive">
    <table class="table table-ligth table-striped">
    <thead class="thead-ligth">
    <tr>
        <th>Nro</th>
        <th>Nombre</th>
        <th>NombreCorto</th>
        <th>Tipo de Sociedad</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Representante</th>
        <th>Acciones</th>
        </tr>
        </thead>
        <!--comment>
            Importamos los datos de la grupoempresa desde la 
            base de datos
        </comment-->
        <tbody>
        @if(count($grupoempresas)<=0)
        <tr>
            <td class="colspan 8">No hay resultados</td>
        </tr>
        @else
        @foreach($grupoempresas as $gp )
        <tr>
        <td>{{$gp->id}}</td>
        <td>{{$gp->Nombre}}</td>
        <td>{{$gp->NombreCorto}}</td>
        <td>{{$gp->TipoSociedad}}</td>
        <td>{{$gp->Correo}}</td>
        <td>{{$gp->Telefono}}</td>
        <td>{{$gp->Direccion}}</td>
        <td>{{$gp->Representante}}</td>
        <td>
              <!--comment>
            Añadimos las funciones para Visualizar, Editar y Eliminar Grupo Empresa
            </comment-->
        <a href="{{url('/grupoempresa/'.$gp->id.'/edit')}}" class="btn btn-secondary">
        Editar
        </a>
        <form action="{{url('/grupoempresa/'.$gp->id)}}" method="post">
        @csrf
        {{method_field('DELETE')}}
        <input class="btn btn-dark" type="submit" onClick="return confirm('¿Estas seguro que deseas borrar?')" value="Borrar">
        </form>
        <a href="{{url('/grupoempresa/'.$gp->id)}}" class="btn btn-secondary">Ver Detalles</a>
        </td>
        </tr>
        @endforeach
        @endif
        </tbody>
        </table>
        </div>
        </div>
        </body>
        </html>
