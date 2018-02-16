<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
	//Asignación masiva de datos, permite ingresar a la bd solamente los datos de fiilable
    protected $fillable = ['nombre', 'email', 'mensaje'];
}
