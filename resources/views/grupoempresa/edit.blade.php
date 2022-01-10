  <!--comment>
            Editar grupoempresa

            Hace uso del formulario para editar los datos de acuerdo
            a una grupoempresa especifica
    </comment-->
<!DOCTYPE html>
<head>
<title> Editar Grupo Empresa | Gestion TIS </title>
</head>
<body>
<div class="container">
<form action="{{url('/grupoempresa/'.$gp->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
@include('grupoempresa.form',['modo'=>'Editar'])


</form>
</div>
</body>
</html>