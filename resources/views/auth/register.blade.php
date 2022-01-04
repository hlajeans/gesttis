@extends('auth.layouts.app')

@section('title', 'Login')

@section('content')

<div class="container">
    <div class="col-12 justify-content-center">
        <div class="row">
            <div class="card register-box">
                <h2> Registrar Usuario</h2>
                <form class="mt-4" method="POST" action="{{url('register')}}">

                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    @error('name')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my*-2">* {{$message}}</p>
                    @enderror

                    <div class="form-group">
                        <label for="codigo">Codigo SIS</label>
                        <input type="text" class="form-control" id="codigo" name="codigo">
                    </div>
                    @error('codigo')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my*-2">* {{$message}}</p>
                    @enderror

                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    @error('email')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my*-2">* {{$message}}</p>
                    @enderror

                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    @error('password')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my*-2">* {{$message}}</p>
                    @enderror

                    <div class="form-group">
                        <label for="password_confirmation">Confirmar contraseña</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                    @error('password_confirmation')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my*-2">* {{$message}}</p>
                    @enderror

                    <div class="form-group">
                        <label for="grupo">Nombre de Grupo-Empresa</label>
                        <input type="text" class="form-control" id="grupo" name="grupo">
                    </div>
                    @error('grupo')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my*-2">* {{$message}}</p>
                    @enderror

                    <div class="form-group">
                        <label for="grupo">Nombre de Grupo-Empresa</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rol" value="2" id="rol1">
                            <label class="form-check-label" for="rol1">
                                Representante legal
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="rol" value="3" id="rol2" checked>
                            <label class="form-check-label" for="rol2">
                                Socio
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success form-control">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
