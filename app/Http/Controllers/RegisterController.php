<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {

        return view('auth.register');
    }
    public function store()
    {
        $this->validate(
            request(),
            [
                'name' => 'required | alpha | max:50 | min:3',
                'email' => 'required|email',
                'password' => 'required|confirmed ',
                'password_confirmation' => "required",
                'codigo' => 'required | numeric | max:9 | min:9',
                'grupo' => 'required'

            ],
            [
                'name.required' => 'Campo obligatorio',
                'name.alpha' => 'Solo se aceptan caracteres alfabeticos',
                'name.max' => 'Se debe ingresar como maximo 50 caracteres',
                'name.min' => 'Se debe ingresar como minimo 3 caracteres',

                'email.required' => 'Campo obligatorio',
                'email.email' => 'Correo no valido',

                'password.required' => 'Campo obligatorio',
                'password.confirmed' => 'Las contraseñas deben ser iguales',

                'password_confirmation.required' => 'Campo obligatorio',

                'codigo.required' => 'Campo obligatorio',
                'codigo.numeric' => 'Solo se aceptan caracteres numericos',
                'codigo.max' => 'Se debe ingresar como maximo 9 caracteres',
                'codigo.min' => 'Se debe ingresar como minimo 9 caracteres',

                'grupo.required' => 'Campo obligatorio'
            ]
        );
        $user = User::create(request(['name', 'codigo', 'email', 'password', 'grupo', 'rol']));
        if ($user) {
            auth()->login($user);
            return redirect()->to('/');
        } else {
            return redirect()->to('register');
        }
    }
}
