  <!--comment>
            Crear tarjeta

            Hace uso del formulario para crear una tarjeta
    </comment-->
<!DOCTYPE html>
<head>
<title> Añadir Tarjeta | Gestion TIS </title>
</head>
<body>
<div class="container">
    <form action="{{url('/card')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('card.form',['modo'=>'Añadir'])
    </form>
</div>
</body>
<html>
