<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Fabricante;
use Auth;

class FabricantesController extends Controller
{

   	public function show($id)
   	{
   		$fabricante = Fabricante::findOrFail($id);
   		return view('fabricantes.show', ['fabricante' => $fabricante]);
   	}

   	public function edit($id)
   	{
   		return view('fabricantes.edit', ['fabricante' => Fabricante::findOrFail($id)]);
   	}

   	public function update($id, Request $request)
   	{
   		$fabricante = Fabricante::findOrFail($id);

         if(is_null(Auth::user()->usergrupos()->where('owner_id',$id)->first()))
            return back();

   		$fabricante->nome = $request->input('nome');
   		$fabricante->save();
   		return redirect('/fabricantes/'.$fabricante->id);
   	}

}
