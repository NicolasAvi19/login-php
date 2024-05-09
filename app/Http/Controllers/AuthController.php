<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // para el sistema de autenticación
use Illuminate\Support\Facades\Hash; // para la función de hashing
use App\Models\User; // Modelo de usuario

class AuthController extends Controller
{
    // Método para mostrar el formulario de inicio de sesión
    public function login()
    {
        return view('auth.login');
    }

    // Método para mostrar el formulario de registro
    public function register()
    {
        return view('auth.register');
    }

    // Método para autenticar a un usuario
    public function authenticate(Request $request)
    {
        // Validar las credenciales proporcionadas por el usuario
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Intentar autenticar al usuario con las credenciales
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // Redirigir al usuario a la URL a la que intentaba acceder originalmente
            return redirect()->intended('/');
        }

        // Si la autenticación falla, redirigir de vuelta al formulario de inicio de sesión con un mensaje de error
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas son incorrectas.',
        ])->onlyInput('email');
    }

    // Método para registrar un nuevo usuario
    // Método para registrar un nuevo usuario
public function store(Request $request)
{
    // Validar los datos del formulario de registro
    $validatedData = $request->validate([
        'username' => ['required', 'string', 'max:255', 'unique:users'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:3', 'confirmed'],
    ]);

    // Crear un nuevo usuario con los datos validados
    $user = User::create([
        'name' => $validatedData['username'], // Cambiado de 'username' a 'name'
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password']),
    ]);

    // Autenticar al nuevo usuario
    Auth::login($user);

    // Redirigir al usuario al formulario de inicio de sesión después de registrarse correctamente
    return redirect()->route('login'); // Redirigir a la ruta con nombre 'login'
}

}



