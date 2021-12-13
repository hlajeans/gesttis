<!DOCTYPE html>
<head>
<title> Mi Grupo Empresa | Gestion TIS </title>
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
<a href="{{url('/card/create')}}" class="btn btn-dark">+ Añadir</a>
<a href="{{url('/card/create')}}" class="btn btn-dark"> Evaluar </a>
<br/>


    <div class="container">
        <h2 class="text-center">Tablero de actividades</h2>
        @if(count($cards)<=0)
        <br/>
        <h4 class="text-center">No se encontraron tarjetas en este espacio de trabajo</h4>
        @else
        <br/>
        <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($cards as $card)
        <div class="col">
        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">{{$card->Titulo}}</div>
            <div class="card-body">
              <p class="card-text">{{$card->Descripcion}}</p>
              <a href="{{url('/card/'.$card->id)}}" class="btn btn-warning">Ver detalles</a>
            </div>
          </div>
        </div>
          @endforeach
        </div>
          @endif
    </div>

    </body>
        </html>
