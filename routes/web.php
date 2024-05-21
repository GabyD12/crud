<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('cursos/listar',[ProfesorController::class,'index'])->name('curso.index');
Route::get('cursos/create',[ProfesorController::class,'create']);
Route::post('cursos/store', [ProfesorController::class,'store'])->name('curso.store');
Route::get('curso/{curso}',[ProfesorController::class,'show'])->name('curso.show');
Route::put('curso/{curso}',[ProfesorController::class,'update'])->name('curso.update');
Route::delete('curso/{curso}',[ProfesorController::class,'destroy'])->name('curso.destroy');
Route::get('curso/{curso}/editar',[ProfesorController::class,'edit'])->name('curso.edit');