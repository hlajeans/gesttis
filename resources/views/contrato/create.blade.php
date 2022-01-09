<!DOCTYPE html>
<html lang="en">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

@include('header')


<body>
    
    <div class="container">
        <div class="col-12">
            <div class="row">

                @if(Auth::user()->rol==1 | Auth::user()->rol==2)
                <form action="{{route('contrato.store')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <h2 class="text-center p-2">FIRMA DE CONTRATO</h2>
                    <div class="col-5" style="margin: 0 auto;">

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Nombre Grupo-Empresa</label>
                            <input class="form-control" type="text" name="nombre" id="formGroupExampleInput" class="form-control-file">
                        </div>



                        <div class="mb-1">
                            <label for="formGroupExampleInput" class="form-label">Representante legal</label>
                            <input class="form-control" type="text" name="representante" id="formGroupExampleInput" class="form-control-file">
                        </div>




                        <div class="mb-3">
                            <label for="inputPassword4" class="form-label">Subir PDF "Contrato"</label>
                            <input type="file" accept=".pdf" class="form-control" name="file" aria-label="file example" required>
                            <div class="invalid-feedback">Subir PDF "Contrato"</div>
                        </div>

                        <div class="class=" col-12 d-grid gap-2"">
                            <button class="btn btn-success" type="submit">Registrar</button>
                            <a class="btn btn-primary" href="/home"">Cancelar</a>
                        </div>
                    </div>
                </form>
                @endif
                
            </div>
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