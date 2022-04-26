<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function create()
    {
        return view('admin.login.login');
    }
    public function postLoginAdmin(Request $request) //Pendiente
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('email', $request->email)->whereIn('role_id', [1, 2])->first();

        if ($user && Hash::check($request->password, $user->password)) { //validar si existe usuario
            session()->put('user', $user->email);

            return redirect(route('admin.index'));
        }
        return back()->withSuccess('¡Lo siento! Ingresaste credenciales inválidas, o no tienes permiso para acceder a este sitio.');
    }
    public function signoutAdmin()
    {
        session()->flush();
        return Redirect('admin');
    }
}
