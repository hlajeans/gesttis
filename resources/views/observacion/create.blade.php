<!DOCTYPE html>
<head>
<title> Añadir Tarjeta | Gestion TIS </title>
</head>
<body>
<div class="container">
    <form action="{{url('/observacion')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('observacion.form',['modo'=>'Añadir'])
    </form>
</div>
</body>
<html>
