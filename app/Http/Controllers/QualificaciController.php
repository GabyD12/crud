<?php

namespace App\Http\Controllers;

use App\Models\Qualificaci;
use Illuminate\Http\Request;

class QualificaciController extends Controller
{
    public function create(){

        return view('calificacionView');

    }

    public function store(Request $request){
        
        $calificacion = new Qualificaci();
        $calificacion->name = $request->name;
        $calificacion->nota1 = $request->nota1;
        $calificacion->nota2 = $request->nota2;
        $calificacion->nota3 = $request->nota3;

        

        $calificacion->save();
        return $calificacion;

    }
}
