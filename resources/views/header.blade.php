<header class="p-3 bg-custom text-white">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }


        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
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
            <!--
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control form-control-dark" placeholder="Buscar..."
                aria-label="Search">
        </form> -->

            <div class="text-end">
                @if(auth()->check())
                <a href="{{route('login.destroy')}}" class="btn btn-danger">Cerrar Sesion</a>
                @else
                <a href="{{url('login')}}" type="button" class="btn btn-warning">Iniciar Sesion</a>
                @endif
                <a href="{{url('register')}}" type="button" class="btn btn-warning">Registrase</a>
            </div>
        </div>
    </div>
</header>

</header>
