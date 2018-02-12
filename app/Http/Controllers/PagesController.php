<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMessageRequest;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('example', ['only' => ['home']]);
    }
    
    public function home()
    {
    	return view('home');
    }

    public function contact()
    {
    	return view('contactos');
    }

    public function mensajes(CreateMessageRequest $request)
    {
        $data = $request->all(); //devuelve un array
        /*return redirect()->route('contactos')
                        ->with('info', 'Tu mensaje se envio correctamente');*/
        return back()->with('info', 'Tu mensaje se envio correctamente');
    }

    public function saludo($nombre = "Invitado")
    {
    	return view('saludo', compact('nombre'));
    }
}
