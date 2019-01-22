<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Http\Requests\StoreContacto;

class contactoController extends Controller
{

    public function store(StoreContacto $request)
    {
        Mail::send('emails.contact', $request->all(), function($smj){
            $smj->Subject('Correo de contacto');
            $smj->to('atencionaclientes@mobirama.com.mx');
        });

        return redirect()->route('contacto.contacto')->with('info', 'Mensaje enviado');
    }

    //muestra la vista
    public function index()
    {
        return view('contacto.contacto');
    }
}
