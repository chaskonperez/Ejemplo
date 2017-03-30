<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Cliente;

class ClienteController extends Controller
{    
	public function getCliente($rut)
	{
		return Cliente::rut($this->validarRut($rut))->first();
	}

	private function validarRut($rut)
	{
		return $rut;
	}
}