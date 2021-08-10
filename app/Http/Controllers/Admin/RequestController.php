<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RequestStatus;
use Illuminate\Support\Facades\Mail;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numeration = 1; //numerar item de tabla
        $requests = RequestStatus::get();
        foreach ($requests as $request) {
        }
        return view('admin.updateRequest.updateRequest', compact('requests','numeration'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $status = $request->status;
        $requestStatus = RequestStatus::where('id', $id)->update(array('status' => $status));
        $user = RequestStatus::find($id)->user;

        if ($status != 'Pendiente') {
            $userMail = [];
            $userMail['email'] = $user->email;
            $userMail['firstName'] = $user->firstName;
            $userMail['firstLastName'] = $user->firstLastName;
            $userMail['status'] = $status;
            $this->sendMail($userMail);
        }
        return back()->withSuccess('Registro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sendMail(array $user)
    {
        $subject = 'Actualización de estado';
        $receiver = $user['email'];
        Mail::send(
            'mail.statusUpdate',
            $user,
            function ($email) use ($subject, $receiver) {
                $email->from("bsajbochols@miumg.edu.gt", "Actualización de estado"); //Emisor
                $email->subject($subject); //Asunto
                $email->to($receiver); //Receptor
            }
        );
    }
}
