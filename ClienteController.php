<?php

namespace KCC\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Cliente;
use Rut;

class ClienteController extends Controller
{    
	public function getCliente($rut)
	{
		return Cliente::rut(Rut::validar($rut))->first();
	}
}