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
            @if(auth()->check())
            <a href="/home" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="{{asset('empresa.png')}}" width="40" alt="">
            </a>

            <ul class="nav col-10 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/convocatoria" class="nav-link px-2 text-blue">CONVOCATORIA</a></li>
                <li><a href="{{url('/pliegos')}}" class="nav-link px-2 text-blue">PLIEGO DE ESPECIFICACIONES</a></li>
                <li><a href="{{url('/grupoempresa')}}" class="nav-link px-2 text-blue">GRUPO-EMPRESA</a></li>
                <li><a href="{{url('contrato/create')}}" class="nav-link px-2 text-blue">CONTRATO</a></li>

                <!-- Example single danger button -->
                <div class="btn-group">
                    <button type="button" class="btn btn-white dropdown-toggle nav-link px-2 text-blue" data-bs-toggle="dropdown" aria-expanded="false">
                        FASE DE PLANIFICACION
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('sobres/show')}}" class="dropdown-item nav-link px-2 text-blue">DOCUMENTO SOBRE A y B</a></li>
                        <li><a class="dropdown-item nav-link px-2 text-blue " href="{{url('pagos/create')}}">PLAN DE PAGOS</a></li>
                        <li><a class="dropdown-item nav-link px-2 text-blue " href="#">PLAN DE SPRINT</a></li>

                    </ul>
                </div>


            </ul>
            @endif
            <div class="text-end" style="flex: auto;">
                @if(auth()->check())
                <form action="{{ url('logout') }}" method="POST" style="display: inline;">
                    {{ csrf_field() }}
                    <button class="btn btn-danger" type="submit">Salir</button>
                </form>
                @else
                <a href="{{url('login')}}" type="button" class="btn btn-warning">Iniciar Sesion</a>
                @endif
                <a href="{{url('register')}}" type="button" class="btn btn-warning">Registrase</a>
            </div>
        </div>
    </div>
</header>

</header>