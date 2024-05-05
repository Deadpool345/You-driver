<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cliente;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('correo', 'password');

        if (Auth::guard('clientes')->attempt($credentials)) {
            return redirect()->intended('/');
        }else{
            return back()->withErrors([
                'mensaje' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
            ]);
        }

        
    }

    public function logout(Request $request)
    {
        Auth::guard('clientes')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
