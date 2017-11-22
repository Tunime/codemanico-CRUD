<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Mascota;
use App\Http\Requests;

class MascotaController extends Controller
{
	public function vista(){
		return view('agregar');
	}
    public function create(Request $request){
    	$mascota = new Mascota();

    	$mascota -> nombre = $request -> nombre;
    	$mascota -> clase = $request -> clase;
    	$mascota -> raza = $request -> raza;
    	$mascota -> propietario = $request -> propietario;
    	$mascota -> save();

    	return redirect('/create');
    }
}
