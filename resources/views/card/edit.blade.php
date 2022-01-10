  <!--comment>
            Editar tarjeta

            Hace uso del formulario para editar los datos de acuerdo
            a una tarjeta especifica
    </comment-->
<!DOCTYPE html>
<head>
<title> Editar Grupo Empresa | Gestion TIS </title>
</head>
<body>
<div class="container">
<form action="{{url('/card/'.$card->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
@include('card.form',['modo'=>'Editar'])

</form>
</div>
</body>
</html>