<!DOCTYPE html>
<html lang="en">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<head>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial--scale=1.0">
    <title>@yield('title') - Laravel App</title>
    <link rel="stylesheet" href="https://cdnje.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <style>
        .login-box {
            width: 60%;
            margin: auto;
            padding: auto;
            justify-content: center;
            justify-items: center;
        }

        .register-box {
            width: 70%;
            margin: auto;
            padding: auto;
            justify-content: center;
            justify-items: center;
        }
    </style>
</head>

<header class="p-3 bg-custom text-white">

    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="{{asset('empresa.png')}}" width="40" alt="">
            </a>

            <ul class="nav col-10 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/convocatoria" class="nav-link px-2 text-blue">CONVOCATORIA</a></li>
                <li><a href="{{url('/pliegos')}}" class="nav-link px-2 text-blue">PLIEGO DE ESPECIFICACIONES</a></li>
                <li><a href="{{url('/grupoempresa')}}" class="nav-link px-2 text-blue">GRUPO-EMPRESA</a></li>
                <li><a href="{{url('contrato/create')}}" class="nav-link px-2 text-blue">CONTRATO</a></li>
                <li><a href="{{url('sobres/show')}}" class="nav-link px-2 text-blue">FASE DE PLANIFICACION</a></li>
            </ul>
            <div class="text-end">
                @if(auth()->check())
                <form action="{{ url('logout') }}" method="POST" style="display: inline;">
                    {{ csrf_field() }}
                    <button class="btn btn-danger" type="submit">Salir</button>
                </form>
                <!-- <a href="{{route('logout')}}" class="btn btn-danger">Cerrar Sesion</a> -->
                @else
                <a href="{{url('login')}}" type="button" class="btn btn-warning">Iniciar Sesion</a>
                @endif
                <a href="{{url('register')}}" type="button" class="btn btn-warning">Registrase</a>
            </div>
        </div>
    </div>
</header>

<body class="bg-gray-100 text-gray-800">
    <nav class="flex py-5 bg-indigo-500 text-white">

    </nav>
    @yield('content')
</body>

</html>
