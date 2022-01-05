@extends('auth.layouts.app')

@section('title', 'Register')

@section('content')
<div class="container">
    <div class="col-12 justify-content-center">
        <div class="row">
            <div class="card login-box">
            <div class="text-center">
            <a href="/home" class="align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="{{asset('empresa.png')}}" width="150" alt="">
            </a>
            </div>
                <h1 class="text-5xl text-center pt-24"> Iniciar Sesion</h1>
                <form class="mt-4" method="POST" action="{{url('login')}}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    @error('message')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full  text-red-600 p-2 my*-2">* error</p>
                    @enderror
                    <div class="text-center">
                        <div style="margin: auto;width: 150px;padding: 10px 10px;">
                        <button type="submit" class="btn btn-success form-control">Iniciar</button>
                        </div>                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
