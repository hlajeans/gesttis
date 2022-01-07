</html>
<!DOCTYPE html>
<html>
@include('header')
<head>
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<script type="text/javascript" src="js/jquery-1.12.0.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/editor.js"></script>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/editor.css">
	<style>
		.texbordenone{
            border: none;
        background: ghostwhite !important;
        }
	</style>
</head>



<body>
<h2 class="text-center p-2">Requerimientos de Fase de Publicaciones</h2>
<div class="container">
        <div class= "row">
				<div class="col-md" >
					<label for="exampleFormControlTextarea1" class="form-label">SOBRE "A"</label>
					<div class="" > 
					@if(!$ultimoSobre)
						<textarea readonly class="form-control texbordenone" id="exampleFormControlTextarea1" rows="19">No hay registro sobre A</textarea>                                    
					@else

						<textarea readonly class="form-control texbordenone" id="exampleFormControlTextarea1" rows="19">{{$ultimoSobre->sobreA}}</textarea>
					@endif
					
						
					</div>
				</div>

				<div class="col-md">
					<label for="exampleFormControlTextarea1" class="form-label">SOBRE "B"</label>
					<div class="">
					@if($ultimoSobre)
					<textarea readonly class="form-control texbordenone tex-light" id="exampleFormControlTextarea1" rows="19">{{$ultimoSobre->sobreB}}</textarea>

					@else
					<textarea readonly class="form-control texbordenone" id="exampleFormControlTextarea1" rows="19">No hay registro sobre B</textarea>                                    

					@endif
					
					</div>
				</div>
				
				<div >
					
					<label for="exampleFormControlTextarea1" class= "row " class="form-label">FECHAS DE PRESENTACION</label>
					@if(!$ultimoSobre)
						<textarea readonly class="form-control texbordenone" id="exampleFormControlTextarea1" rows="1">No existe fecha de presentacion</textarea>                                    
					@else

						<textarea readonly class="form-control texbordenone text-center" style="justify-content: center;"id="exampleFormControlTextarea1" rows="1">{{$ultimoSobre->fecha}}</textarea>
					@endif
					
				</div>
			
				<div class="d-grid gap-2 col-3 mx-auto mt-4">
                	 <a class="btn btn-primary"href="{{url('planificacion/create')}}" >LLenar Formulario</a>       
                </div>
	
    	</div>
	

		<footer class="my-2 pt-5 text-muted text-center text-small">
                            <p class="mb-1">© 2021 Company B.Tec_TIS</p>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#">Privacy</a></li>
                                <li class="list-inline-item"><a href="#">Terms</a></li>
                                <li class="list-inline-item"><a href="#">Support</a></li>
                            </ul>
                        </footer>
	</body>
</html>