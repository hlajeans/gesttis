  <!--comment>
            Mostrar tarjeta

            Muestra los detalles de una tarjeta en especifico

    </comment-->
<title> {{$card->Titulo}} | Gestion TIS </title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form action="{{url('/card/'.$card->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('GET')}}

<div class="container">
    <br/>
    <h1 class="my-4">{{$card->Titulo}}
    </h1>
  
    <div class="row">

      <div class="col-md-10">
          <br/>
        <h3 class="my-3">Detalles: </h3>
        <ul>
          <li><strong></strong>{{$card->Descripcion}}</li>
          <br/>
          <h3 class="my-3">Link: </h3>
          <li>Se adjunto el siguiente link: {{$card->Link}}</li>
          <br/>
            <!--comment>
            Funcion para descargar los archivos adjuntos a una tarjeta
            </comment-->
            <a href="{{asset('storage').'/'.$card->Archivo}}" download class="btn btn-warning">Descargar archivos adjuntos</a>
          <a href="{{url('/card')}}" class="btn btn-dark">Regresar</a>
        <br/>
        </ul>
      </div>
    </div>
    <br/>
  </div>
</form>