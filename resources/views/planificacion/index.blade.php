<!DOCTYPE html>
<html lang="en">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado</title>
</head>

@include('header')


<body>
  @if(Auth::user()->rol==1 | Auth::user()->rol==4)
  <h2 class="text-center p-2">Listado de Fase-Publicacion</h2>
  <table class="table table-bordered">
  @if(Auth::user()->rol==1 | Auth::user()->rol==4)
  <div class="float-rid">
            <a class="btn btn-success" href="{{url('sobres/show') }}">Regresar</a>
          </div>
          @endif
    <thead>
      <tr>
        <th scope="col">#</th>

        <th scope="col">Nombre-Grupo-Empresa</th>
        <th scope="col">Representante-Legal</th>
        <!-- <th scope="col">Fecha</th>-->
        <th scope="col">Correo</th>

        <th scope="col">Semestre</th>

        <th scope="col">Creado</th>
        <!-- <th scope="col">Actualizado</th> -->
        <th scope="col">Sobre A</th>
        <th scope="col">Sobre B</th>
        <th scope="col">Contrato</th>

      </tr>
    </thead>
    <tbody>
      <?php $i = 0;

      ?>

      @foreach ($planificaciones as $item)
      <tr>

        <td><?php $i++;
            echo $i; ?></td>
        <td>{{@$item->nombre}}</td>
        <td>{{@$item->representante}}</td>
        <td>{{@$item->correo}}</td>
        <td>{{@$item->semestre}}</td>
        <td>{{@$item->created_at}}</td>
        <!-- <td>{{@$item->updated_at}}</td> -->


        <td>
          <a href="{{@$item->getPathFileAttribute()}} " class="btn btn-danger" target="_blank" title="Vizualizar PDF">Ver</a>

        </td>


        <td>
          <a href="{{@$item->getPathFileAttribute2()}} " class="btn btn-danger" target="_blank" title="Vizualizar PDF">Ver</a>

        </td>
        <td>

          <!-- //Aceptar -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1{{@$item->id}}" data-bs-whatever="@getbootstrap">Aceptar</button>
          @include("planificacion.aceptar",['aceptar'=>@$item->id,'correo'=>@$item->correo])

          <!-- //Rechazar -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2{{@$item->id}}" data-bs-whatever="@getbootstrap">Rechazar</button>
          @include("planificacion.rechazar",['rechazar'=>@$item->id,'correo'=>@$item->correo])

        </td>
        <td>

        </td>
      </tr>
      @endforeach



    </tbody>

  </table>
  @if(Auth::user()->rol==1 | Auth::user()->rol==2 | Auth::user()->rol==3)
  <div>
    <a class="btn btn-danger" href="{{ route('planificacion.create') }}"">RegistrarNuevo</a>
  </div>
  @endif
@endif

@if(Auth::user()->rol==1 | Auth::user()->rol==2)
<div class=" container">
      <div class="col-12">
        <div class="row">
          <h2 class=" text-center p-2">Fue registrado exitosamente</h2>
          <div class="float-rid">
            <a class="btn btn-success" href="{{url('sobres/show') }}">Regresar</a>
          </div>
          <!-- <div>
            <a class="btn btn-danger" href="{{ route('planificacion.create') }}" ">RegistrarNuevo</a>
          </div> -->
        </div>
      </div>
    </div>
</div>
@endif
</body>

    
</html>