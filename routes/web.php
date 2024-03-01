<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formularioNotas',[QualificaciController::class,'create']);
Route::post('/crearNota',[QualificaciController::class,'create'])->name('qualification.store');
Route::get('/formularioEcuacion',[ResultController::class,'create']);
Route::post('/crearEcuacion',[ResultController::class,'store'])->name('result.store');
