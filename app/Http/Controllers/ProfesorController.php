<?php

namespace App\Http\Controllers;
use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller


{
    public function index(){


        $cursos = Profesor::orderBy('id', 'desc')->get();
        return view('cursos.listar', compact('cursos'));


    }


    public function show(Profesor $curso){


        return view('cursos.show',compact('curso'));




    }


    public function destroy (Profesor $curso){
           
        $curso->delete();
        return redirect()->route('curso.index');
    }
   

    public function edit(Profesor $curso){
        return view('cursos.edit', compact('curso'));
    }
    public function update(Request $request, Profesor $curso){
        $curso->cedula = $request->cedula;
        $curso->name = $request->name;
        $curso->direccion = $request->direccion;
        $curso->telefono = $request->telefono;
       
        $curso->save();
     
        return redirect()->route('curso.index');
     
      }
    public function create(){
        return view('cursos.create');
    }


    public function store(Request $request){
       
        $curso= new Profesor();
        $curso->name=$request->name;
        $curso->cedula=$request->cedula;
        $curso->direccion=$request-> direccion;
        $curso->telefono=$request->telefono;
        $curso->save();
   


    }

}
