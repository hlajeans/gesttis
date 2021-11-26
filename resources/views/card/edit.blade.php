<!DOCTYPE html>
<head>
<title> Editar Grupo Empresa | Gestion TIS </title>
</head>
<body>
<div class="container">
<form action="{{url('/card/'.$gp->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}
@include('card.form',['modo'=>'Editar'])

</form>
</div>
</body>
</html>