<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Cliente;

class RegisterController extends Controller
{
    /**
     * Display the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'nombre' => 'required|string|unique:cliente|regex:/^[A-Za-z]+$/',
            'correo' => 'required|string|email|unique:cliente|regex:/^\S+@\S+\.\S+$/i',
            'contraseña' => 'required|string|min:8|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
        ], [
            'nombre.regex' => 'Solo se aceptan letras en el nombre de usuario.',
            'correo.email' => 'El correo electrónico debe tener un formato válido.',
            'correo.unique' => 'Este correo electrónico ya está registrado.',
            'contraseña.regex' => 'La contraseña debe tener al menos una letra minúscula, una letra mayúscula y un número.',
            'contraseña.confirmed' => 'Las contraseñas no coinciden.',
        ]);

        // Create and store the new user
        $cliente = new Cliente();
            $cliente->nombre = $validatedData['nombre'];
            $cliente->correo = $validatedData['correo'];
            $cliente->contraseña = $validatedData['contraseña']; // Hash de la contraseña
            $cliente->save();

        // Redirect the user after successful registration
        return redirect('/login')->with('success', '¡Registro exitoso! Ahora puedes iniciar sesión.');
    }
}
