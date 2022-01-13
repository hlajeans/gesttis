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
  <div class="container">
    <div class="col-12">
      <div class="row">
        <h2 class="text-center p-2">Contratos enviados por Grupo_Empresa</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">#</th>

              <th scope="col">Nombre de Grupo-Empresa</th>

              <th scope="col">Representante legal</th>

              <th scope="col">Creado</th>

              <th scope="col">Documento</th>

            </tr>
          </thead>
          <tbody>
            <?php $i = 0;

            ?>
            @foreach ($contratos as $item)

            <tr>
              <td><?php $i++;
                  echo $i; ?></td>

              <td>{{@$item->nombre}}</td>

              <td>{{@$item->representante}}</td>

              <td>{{@$item->created_at}}</td>


              <td>
                <a href="http://tectis.tis.cs.umss.edu.bo/contrato/file/{{@$item->documento}} " class="btn btn-danger" target="_blank">Ver Documento</a>
              </td>
            </tr>
            @endforeach

          </tbody>

        </table>
      </div>
    </div>
  </div>
  @endif

  @if( Auth::user()->rol==2)
<div class=" container">
      <div class="col-12">
        <div class="row">
          <h2 class=" text-center p-2">Fue registrado exitosamente</h2>
          <div class="float-rid">
            <a class="btn btn-success" href="{{url('contrato/create')}}">Regresar</a>
          </div>
        </div>
      </div>
    </div>
</div>
@endif
</body>


</html>