<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            return redirect()->intended('dashboard')
                ->withSuccess('Has iniciado sesión correctamente.');
        }

        return redirect('login')->withSuccess('¡Lo siento! Ingresaste credenciales inválidas.');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect('login')->withSuccess('¡Opps! No tienes acceso a esta ruta');
    }

    public function signout()
    {
        session()->flush();
        Auth::logout();

        return Redirect('/');
    }
}
