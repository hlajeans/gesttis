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

    <div class="container">
        <h2 class="text-center">Tablero de actividades</h2>
        <div class="m-4">
            <ul class="nav nav-tabs" id="myTab">
                <li class="nav-item">
                    <a href="#porrealizar" class="nav-link active">Por realizar</a>
                </li>
                <li class="nav-item">
                    <a href="#encurso" class="nav-link">En curso</a>
                </li>
                <li class="nav-item">
                    <a href="#terminadas" class="nav-link">Terminadas</a>
                </li>
                <li class="nav-item">
                    <a href="#observacion" class="nav-link">Observaciones</a>
                </li>
            </ul>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
            <script>
            document.addEventListener("DOMContentLoaded", function(){
                var tabList = [].slice.call(document.querySelectorAll("#myTab a"));
                tabList.forEach(function(tab){
                    var tabTrigger = new bootstrap.Tab(tab);
            
                    tab.addEventListener("click", function(event){
                        event.preventDefault();
                        tabTrigger.show();
                    });
                });
            });
            </script>
        @if(count($cards)<=0)
        <br/>
        <div class="text-center"><a href="{{url('/card/create')}}" class="btn btn-dark center">+ Añadir</a><br/><br/></div>
        <h4 class="text-center">No se encontraron tarjetas en este espacio de trabajo</h4>
        @else
        <br/>
    <div class="tab-content">
        <div>
            <a href="{{url('/card/create')}}" class="btn btn-dark center">+ Añadir Tarjeta</a>
        </div>
        <br/>
        <div class="tab-pane fade show active" id="porrealizar">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($cards as $card)
            @if($card->Modo == 'Por Realizar')
        <div class="col">
        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">{{Str::limit($card->Titulo,20)}}</div>
            <div class="card-body">
              <p class="card-text">{{Str::limit($card->Descripcion,25)}}</p>
              <a href="{{url('/card/'.$card->id)}}" class="btn btn-warning">Ver detalles</a>
            </div>
          </div>
        </div>
            @endif
          @endforeach
          </div>
        </div>

        <div class="tab-pane fade" id="encurso">
            <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($cards as $card)
            @if($card->Modo == 'En Curso')
        <div class="col">
        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">{{Str::limit($card->Titulo,20)}}</div>
            <div class="card-body">
              <p class="card-text">{{Str::limit($card->Descripcion,25)}}</p>
              <a href="{{url('/card/'.$card->id)}}" class="btn btn-warning">Ver detalles</a>
            </div>
          </div>
        </div>
            @endif
          @endforeach
        </div>
        </div>

        <div class="tab-pane fade" id="terminadas">
            <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($cards as $card)
            @if($card->Modo == 'Terminado')
        <div class="col">
        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">{{Str::limit($card->Titulo,20)}}</div>
            <div class="card-body">
              <p class="card-text">{{Str::limit($card->Descripcion,25)}}</p>
              <a href="{{url('/card/'.$card->id)}}" class="btn btn-warning">Ver detalles</a>
            </div>
          </div>
        </div>
            @endif
          @endforeach
        </div>
        </div>
        <div class="tab-pane fade" id="observacion">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($cards as $card)
                @if($card->Modo == 'Observacion')
            <div class="col">
            <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">{{Str::limit($card->Titulo,20)}}</div>
                <div class="card-body">
                  <p class="card-text">{{Str::limit($card->Descripcion,25)}}</p>
                  <a href="{{url('/card/'.$card->id)}}" class="btn btn-warning">Ver detalles</a>
                </div>
              </div>
            </div>
                @endif
              @endforeach
              </div>
            </div>
    </div>
</div>
@endif
    </body>
        </html>