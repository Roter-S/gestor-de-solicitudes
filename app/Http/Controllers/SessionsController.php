<?php

namespace App\Http\Controllers;

use App\Models\RequestStatus;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function home()
    {
        return view('app.home');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt(request(['email', 'password'])) == true) {
            return redirect()->intended('estado-registro');
        }
        return redirect('login')->withSuccess('¡Lo siento! Ingresaste credenciales inválidas.');
    }
    public function statusRegister()
    {
        $user = Auth::user();
        $requestStatus = RequestStatus::where('user_id', $user->id)->first();

        return view('app.statusRegister', compact('user', 'requestStatus')); //vista de estado del registro
    }

    public function signout()
    {
        session()->flush();
        Auth::logout();

        return Redirect('login');
    }
}
