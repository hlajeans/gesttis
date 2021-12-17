<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<br/>
<h1 >{{$modo}} Actividad</h1>
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
</div>
@endif

<div class="form-group">
<label for="Titulo" class="form-label"> Titulo*</label>
<input type= "text" class="form-control" name="Titulo" id="Titulo" value="{{isset($card->Titulo)? $card->Titulo:old('Titulo')}}">
</div>

<div class="form-group">
<label for="Descripcion" class="form-label"> Descripcion*</label>
<input type= "text" class="form-control" name="Descripcion" id="Descripcion" value="{{isset($card->Descripcion)? $card->Descripcion:old('Descripcion')}}">
</div>

<div class="form-group">
<label for="Link" class="form-label"> Link*</label>
<input type= "text" class="form-control" name="Link" id="Link" value="{{isset($card->Link)? $card->Link:old('Link')}}">
</div>

<div class="form-group">
<label for="Archivo"> Archivos adjuntos*</label>
<input type= "file" class="form-control" name="Archivo" id="Archivo" value="Seleccionar archivos">
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<div class="col-4">
    <label for="Modo">Estado</label>
    <select class="form-select" name="Modo" id="Modo">
        <option>Por Realizar</option>
        <option>En Curso</option>
        <option>Terminado</option>
    </select>
</div>

<br/>
<input type= "submit" class="btn btn-dark" value="{{$modo}} datos">
<a href="{{url('/card')}}" class="btn btn-secondary">Regresar</a>
