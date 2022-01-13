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
        <div class="row">


            <form action="{{route('planificacion.store')}}" method="POST" enctype="multipart/form-data">

                @csrf

                <h2 class="text-center p-2">Fase de Publicaciones</h2>
                <div class="col-5" style="margin: 0 auto;">

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nombre-Grupo-Empresa</label>
                        <input class="form-control" type="text" name="nombre" id="formGroupExampleInput" class="form-control-file">
                    </div>

                    <div class="mb-1">
                        <label for="formGroupExampleInput" class="form-label">Representante-Legal</label>
                        <input class="form-control" type="text" name="representante" id="formGroupExampleInput" class="form-control-file">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Correo</label>
                        <input type="email" class="form-control" name="correo" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>

                    <div class="mb-3">
                        <label for="inputPassword4" class="form-label">Semestre</label>
                        <select class="form-select" name="semestre" aria-label="Default select example">
                            <option selected>Seleccione el semestre</option>
                            <option value="1">1</option>
                            <option value="2">2</option>

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="inputPassword4" class="form-label">Subir PDF "Sobre A"</label>
                        <input type="file" multiple accept=".pdf" class="form-control" name="file" aria-label="file example" required>
                        <div class="invalid-feedback">Subir PDF "Sobre A"</div>
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword4" class="form-label">Subir PDF "Sobre B"</label>
                        <input type="file" accept=".pdf" class="form-control" name="fileUno" aria-label="file example" required>
                        <div class="invalid-feedback">Subir PDF "Sobre B"</div>
                    </div>
                    <div class="class=" col-12 d-grid gap-2"">
                        <button class="btn btn-success" type="submit">Enviar</button>
                        <a class="btn btn-primary" href="/">Cancelar</a>
                    </div>
                </div>
            </form>
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