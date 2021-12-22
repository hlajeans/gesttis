<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<br/>
<h1 >{{$modo}} Observacion</h1>
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
<label for="Descripcion" class="form-label"> Observacion*</label>
<input type= "text" class="form-control" name="Observacion" id="Observacion" value="{{isset($card->Descripcion)? $card->Descripcion:old('Descripcion')}}">
</div>

<br/>
<input type= "submit" class="btn btn-dark" value="{{$modo}} observacion">
<a href="{{url('/card')}}" class="btn btn-secondary">Regresar</a>