<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // [
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        // ]
        return Validator::make(
            $data,
            [
                'name' => 'required | alpha | max:50 | min:3',
                'email' => 'required|email',
                'password' => 'required|confirmed ',
                'password_confirmation' => "required",
                // 'codigo' => 'required | numeric | max:9 | min:9',
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

                // 'codigo.required' => 'Campo obligatorio',
                // 'codigo.numeric' => 'Solo se aceptan caracteres numericos',
                // 'codigo.max' => 'Se debe ingresar como maximo 9 caracteres',
                // 'codigo.min' => 'Se debe ingresar como minimo 9 caracteres',

                'grupo.required' => 'Campo obligatorio'
            ]

        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'codigo' => $data['codigo'],
            'grupo' => $data['grupo'],
            'rol' => $data['rol'],
            'password' =>$data['password']
        ]);
    }
}
