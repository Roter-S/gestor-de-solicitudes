<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

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

            return redirect()->intended('estado-registro');
        }

        return redirect('login')->withSuccess('¡Lo siento! Ingresaste credenciales inválidas.');
    }

    public function statusRegister()
    {
        return view('app.statusRegister'); //vista de estado del registro
    }

    public function signout()
    {
        session()->flush();
        Auth::logout();

        return Redirect('login');
    }
}
