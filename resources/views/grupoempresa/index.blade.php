@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{Session::get('mensaje')}}
</div>
@endif



<!DOCTYPE html>
<head>
<title> Grupo Empresa | Gestion TIS </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header class="p-3 bg-custom text-white">
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }
    
            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
        </style>
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
    
            <ul class="nav col-10 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{url('/pliegos')}}" class="nav-link px-2 text-black">Convocatorias</a></li>
                <li><a href="/convocatoria/create" class="nav-link px-2 text-blue">Registrar Convocatoria</a></li>
                <li><a href="" class="nav-link px-2 text-blue">Calendario</a></li>
                <li><a href="{{url('/grupoempresa')}}" class="nav-link px-2 text-blue">Grupo-Empresa</a></li>
                <li><a href="#" class="nav-link px-2 text-blue">Contactos</a></li>
            </ul>
    
            <!--form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Buscar..."
                    aria-label="Search">
            </form-->
    
            <div class="text-end">
                <button type="button" class="btn btn-warning">Iniciar Sesion</button>
                <button type="button" class="btn btn-warning">Registrase</button>
            </div>
        </div>
    </div>
    </header>
    
    </header>  




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
        <a href="{{url('/grupoempresa/'.$gp->id.'/edit')}}" class="btn btn-secondary">
        Editar
        </a>
        
        <form action="{{url('/grupoempresa/'.$gp->id)}}" method="post">
        @csrf
        {{method_field('DELETE')}}
        <input class="btn btn-dark" type="submit" onClick="return confirm('¿Estas seguro que deseas borrar?')" value="Borrar">
        </form>
        <a href="{{url('/grupoempresa/show')}}" class="btn btn-secondary">Ver Detalles</a>
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
