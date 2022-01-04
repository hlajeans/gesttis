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
<link rel="stylesheet"
href="https://cdnje.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

</head>

<header class="p-3 bg-custom text-white">
            
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{url('/pliegos')}}" class="nav-link px-2 text-blue">P-Especificacion</a></li>
                    <li><a href="/convocatoria" class="nav-link px-2 text-blue">Convocatoria</a></li>
                    <li><a href="{{url('/grupoempresa')}}" class="nav-link px-2 text-blue">Grupo-Empresa</a></li>
                    <li><a href="#" class="nav-link px-2 text-blue">Calendario</a></li>
                    <li><a href="#" class="nav-link px-2 text-blue">Contactos</a></li>
          </ul>
                </ul>

                <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control form-control-dark" placeholder="Buscar..."
                        aria-label="Search">
                </form> -->

                <div class="text-end">
                    <button type="button" class="btn btn-warning">Iniciar Sesion</button>
                    <button type="button" class="btn btn-warning">Registrase</button>
                </div>
            </div>
        </div>
</header>
<body class="bg-gray-100 text-gray-800">
    <nav class="flex py-5 bg-indigo-500 text-white">
        <div class="w-1/2 px-12 mr-auto">
            <p class="text-2xl font-bold">tis</p>
        </div>
        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1 ">
    @if(auth()->check())
      <li class="mx-6">
          <p class="text-xl">bienvenido<b>{{auth()->user()->name}}</b></p>
      </li>
          <li>
      <a href="{{route('login.destroy')}}">Cerrar Sesion</a>
      <a href="{{route('register.index')}} class="font-semibold
      border-2 border-white py-2 px-4  ">Cerrar Sesion</a>
      </li>
    @else

    <li>
        <a href="{{route('login.index')}}" class="font-semibold
        hover:bg-indigo-700 py-3 px-4 ">Iniciar Sesion</a>
    </li>
    
    <li>
        <a href="{{route('register.index')}} class="font-semibold
        border-2 border-white py-2 px-4  ">Registrar</a>
        </li>
    @endif 
        </ul>
    </nav>
    @yield('content')
</body>
</html>
