<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Fabricante;

class FabricantesController extends Controller
{
   	public function show($id)
   	{
   		$fabricante = Fabricante::find($id);
   		return view('fabricantes.show', ['fabricante' => $fabricante]);
   	}
}
