<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function create(){

        return view('resultView');

    }

    public function store(Request $request){
        
        $a = $request->a;
        $b = $request->b;
        $c = $request->c;
    
        $discriminant = $b * $b - 4 * $a * $c;

    if ($discriminant >= 0) {
        
        $x1 = (-$b + sqrt($discriminant)) / (2 * $a);
        $x2 = (-$b - sqrt($discriminant)) / (2 * $a);
        
        
        $ecuacion = new Result();
        $ecuacion->a = $a;
        $ecuacion->b = $b;
        $ecuacion->c = $c;
        $ecuacion->x1 = $x1;
        $ecuacion->x2 = $x2;
        $ecuacion->save();
        
        return $ecuacion;
    } 

    }
}
