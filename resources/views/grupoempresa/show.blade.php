<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form action="{{url('/grupoempresa/'.$grupoe->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('GET')}}

<div class="container">
    <br/>
    <h1 class="my-4">{{$grupoe->Nombre}}
    </h1>
  
    <div class="row">
  
      <div class="col-md-8">
        <img class="img-fluid" src="{{asset('storage').'/'.$grupoe->Logo}}" alt="">
      </div>
      <div class="col-md-4">
          <br/>
        <h3 class="my-3">Detalles: </h3>
        <ul>
          <li><strong> Nombre de la Grupo Empresa: </strong>{{$grupoe->Nombre}}</li>
          <li><strong> Nombre Corto (Abreviado): </strong>{{$grupoe->NombreCorto}}</li>
          <li><strong> Tipo de Sociedad: </strong>{{$grupoe->TipoSociedad}}</li>
          <li><strong> Correo de referencia: </strong>{{$grupoe->Correo}}</li>
          <li><strong> Teléfono de referencia: </strong>{{$grupoe->Telefono}}</li>
          <li><strong> Direccion de la empresa: </strong>{{$grupoe->Direccion}}</li>
          <li><strong> Nombre del representante legal: </strong>{{$grupoe->Representante}}</li>
          <li><strong> Nombre Socio 1: </strong>{{$grupoe->Socio1}}</li>
          <li><strong> Nombre Socio 2: </strong>{{$grupoe->Socio2}}</li>
          <li><strong> Nombre Socio 3: </strong>{{$grupoe->Socio3}}</li>
          <li><strong> Nombre Socio 4: </strong>{{$grupoe->Socio4}}</li>
          <br/>
        <a href="{{url('/grupoempresa')}}" class="btn btn-secondary">Regresar</a>
        <br/>
        </ul>
      </div>
  
    </div>
    <br/>
  </div>

</form>