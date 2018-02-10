<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	return view('home');
    }

    public function contact()
    {
    	return view('contactos');
    }

    public function mensajes(Request $request)
    {
    	$this->validate($request, [
            'nombre' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required|min:5'
        ]);

        return $request->all();
    }

    public function saludo($nombre = "Invitado")
    {
    	return view('saludo', compact('nombre'));
    }
}
