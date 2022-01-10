<!--comment>
            Vista por defecto: Tarjetas
            Se muestra la vista por defecto cuando se 
            ingresa a la seccion principal del tablero
</comment-->

<!DOCTYPE html>
<head>
<title> Mi Grupo Empresa | Gestion TIS </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<!--comment>
Importamos el header y creamos la tabla para visualizar las tarjetas
</comment-->
@include('header')
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
            <!--comment>
                Creamos un script para hacer dinamica las opciones disponibles en el tablero
            </comment-->
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
            <!--comment>
                Creamos la logica de la tabla para cada seccion
                (Si encuentra datos los muestra, si no, muestra un mensaje de error)
            </comment-->
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
        <!--comment>
            Seccion Por Realizar
        </comment-->
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
              <a href="{{url('/card/'.$card->id.'/edit')}}" class="btn btn-secondary">Editar</a>
              <form action="{{url('/card/'.$card->id)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input class="btn btn-dark" type="submit" onClick="return confirm('¿Estas seguro que deseas borrar?')" value="Borrar">
                </form>
            </div>
          </div>
        </div>
            @endif
          @endforeach
          </div>
        </div>
        <!--comment>
            Seccion En Curso
        </comment-->
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
              <a href="{{url('/card/'.$card->id.'/edit')}}" class="btn btn-secondary">Editar</a>
              <form action="{{url('/card/'.$card->id)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input class="btn btn-dark" type="submit" onClick="return confirm('¿Estas seguro que deseas borrar?')" value="Borrar">
                </form>

            </div>
          </div>
        </div>
            @endif
          @endforeach
        </div>
        </div>
        <!--comment>
            Seccion Terminadas
        </comment-->
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
              <a href="{{url('/card/'.$card->id.'/edit')}}" class="btn btn-secondary">Editar</a>

              <form action="{{url('/card/'.$card->id)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input class="btn btn-dark" type="submit" onClick="return confirm('¿Estas seguro que deseas borrar?')" value="Borrar">
                </form>
            </div>
          </div>
        </div>
            @endif
          @endforeach
        </div>
        </div>
        <!--comment>
            Seccion Observacion
        </comment-->
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
                  <a href="{{url('/card/'.$card->id.'/edit')}}" class="btn btn-secondary">Editar</a>
                
                  <form action="{{url('/card/'.$card->id)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input class="btn btn-dark" type="submit" onClick="return confirm('¿Estas seguro que deseas borrar?')" value="Borrar">
                </form>
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