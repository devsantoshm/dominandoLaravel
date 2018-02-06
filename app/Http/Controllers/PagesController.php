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
    	if ($request->has('nombre')) {
    		return "Si tiene nombre. Es " . $request->input('nombre');
    	}

    	return 'No tiene nombre';
    }

    public function saludo($nombre = "Invitado")
    {
    	return view('saludo', compact('nombre'));
    }
}
