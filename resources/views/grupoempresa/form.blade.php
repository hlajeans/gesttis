  <!--comment>
            Formulario Grupo Empresa

            Formulario diseñado para editar o crear una grupo empresa
    </comment-->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<br/>
<h2>{{$modo}} Grupo Empresa</h2>
  <!--comment>
            Creamos una alerta en caso de que suceda algun error
            en el formulario
    </comment-->
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
</div>
@endif
<br/>
  <!--comment>
           Designamos los campos necesarios para crear o editar 
           una grupoempresa
    </comment-->
<div class="form-group">
<label for="Nombre"> Nombre de la Grupo Empresa*</label>
<input type= "text" class="form-control" name="Nombre" id="Nombre" value="{{isset($gp->Nombre)? $gp->Nombre:old('Nombre')}}">
</div>

<div class="form-group">
<label for="NombreCorto"> Nombre Corto (Abreviado)* </label>
<input type= "text" class="form-control" name="NombreCorto" id="NombreCorto" value="{{isset($gp->NombreCorto)? $gp->NombreCorto:old('NombreCorto')}}">
</div>

<div class="form-group">
<label for="TipoSociedad"> Tipo de Sociedad* </label>
<input type= "text" class="form-control" name="TipoSociedad" id="TipoSociedad" value="{{isset($gp->TipoSociedad)? $gp->TipoSociedad:old('TipoSociedad')}}">
</div>

<div class="form-group">
<label for="Logo"> Logo de la Grupo Empresa*</label>
@if(isset($gp->Logo))
<img class="img-thumbnail" src="{{asset('storage').'/'.$gp->Logo}}" width=100 alt="">
@endif
<input type= "file" accept=".jpeg, .png, .jpg" class="form-control" name="Logo" id="Logo" value="">
</div>

<div class="form-group">
<label for="Correo"> Correo de referencia*</label>
<input type= "text" name="Correo" class="form-control" id="Correo" value="{{isset($gp->Correo)? $gp->Correo:old('Correo')}}">
</div>

<div class="form-group">
<label for="Telefono">Teléfono de referencia*</label>
<input type= "text" name="Telefono" class="form-control" id="Telefono" value="{{isset($gp->Telefono)? $gp->Telefono:old('Telefono')}}">
</div>

<div class="form-group">
<label for="Direccion"> Direccion de la empresa* </label>
<input type= "text" class="form-control" name="Direccion" id="Direccion" value="{{isset($gp->Direccion)? $gp->Direccion:old('Direccion')}}">
</div>

<div class="form-group">
<label for="Representante"> Nombre del representante legal*</label>
<input type= "text" name="Representante"  class="form-control" id="Representante" value="{{isset($gp->Representante)? $gp->Representante:old('Representante')}}">
</div>

<div class="form-group">
<label for="Socio1"> Nombre Socio 1*</label>
<input type= "text" name="Socio1" class="form-control" id="Socio1" value="{{isset($gp->Socio1)? $gp->Socio1:old('Socio1')}}">
</div>

<div class="form-group">
<label for="Socio2"> Nombre Socio 2*</label>
<input type= "text" name="Socio2" class="form-control" id="Socio2" value="{{isset($gp->Socio2)? $gp->Socio2:old('Socio2')}}">

</div>

<div class="form-group">
<label for="Socio3"> Nombre Socio 3</label>
<input type= "text" name="Socio3" class="form-control" id="Socio3" value="{{isset($gp->Socio3)? $gp->Socio3:old('Socio3')}}">
</div>

<div class="form-group">
<label for="Socio4"> Nombre Socio 4</label>
<input type= "text" name="Socio4" class="form-control" id="Socio4" value="{{isset($gp->Socio4)? $gp->Socio4:old('Socio4')}}">
</div>
  <!--comment>
          Funciones para registrar/actualizar los datos y volver atras
    </comment-->
<br/>
<input type= "submit" class="btn btn-dark"value="{{$modo}} datos">
<a href="{{url('/grupoempresa')}}" class="btn btn-secondary">Regresar</a>
<br/>
<br/>