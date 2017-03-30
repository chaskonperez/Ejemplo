<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Usuario;

class UsuarioController extends Controller
{    
	public function getUsuario($rut)
	{
		return Usuario::rut($this->validarRut($rut))->first();
	}

	private function validarRut($rut)
	{
		return $rut;
	}
}