<?php

namespace KCC\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Usuario;
use Rut;

class UsuarioController extends Controller
{    
	public function getUsuario($rut)
	{
		return Usuario::rut(Rut::validar($rut))->first();
	}
}