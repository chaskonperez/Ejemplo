<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Venta;

class VentaController extends Controller
{    
	public function getVenta($id)
	{
		return Venta::find($id);
	}
}