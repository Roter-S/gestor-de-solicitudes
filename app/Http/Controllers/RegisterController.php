<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function create()
    {
        return view('app.register'); //motrar vista del registro
    }
    public function store(RegisterRequest $request) //funcion guardar
    {
        //caracteres y tamaño de la conrtaseña aleatria.
        $largo = 8;
        $cadena_base =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $cadena_base .= '0123456789';
        $cadena_base .= '!@#%^&*()_,./<>?;:[]{}\|=+';
        $passwordRnd = '';
        $limite = strlen($cadena_base) - 1; //Obtiene la longitud del string
        for ($i = 0; $i < $largo; $i++) {
            $passwordRnd .= $cadena_base[rand(0, $limite)]; //armano la contraseña digito por digito
        }

        //sentencia para evaluar la carpeta del destino
        if ($request->file('photo')) {
            $namePhoto = $request->dpi . '.' . $request->photo->extension(); //3063914570401.jpg
            $request->file('photo')->store('img', 'public');
        }
        
        $user =  User::create(
            [   //editando campos
                'password' => bcrypt($passwordRnd), //encriptando contraseña
                'role_id' => 3,
                'photo' => $namePhoto,
            ] + $request->all() //llamando todo el formulario
        );
        $userData = [];
        $userData['password']=$passwordRnd;
        $userData['email']=$user->email;
        $userData['firstName']=$user->firstName;
        $userData['firstLastName']=$user->firstLastName;
        
        $this->sendMail($userData);
        $user->save(); //guardando formualrio
        auth()->login($user);
        return redirect()->to('/login')->with('status', 'Busque dentro de su correo electronico el usuario y contraseña para inciar sesión.'); //redirrigiendo si se guardo con exito
    }
    //funcion para enviar email
    public function sendMail(Array $user)
    {
        $subject = 'Información del usuario';
        $receiver = $user['email'];
        Mail::send(
            'mail.userConfirm',
            $user,
            function ($email) use ($subject, $receiver) {
                $email->from("bsajbochols@miumg.edu.gt", "Datos para inicio de sesión"); //Emisor
                $email->subject($subject); //Asunto
                $email->to($receiver); //Receptor
            }
        );
    }
}
