<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    public function profesor(){
        //$profesor= profesor::find($this->user_id)"consulta propia"
        return$this->belongsTo('App\Models\Profesor');

    }
    public function alumno(){
        return $this->hasOne('App\Model\Alumno');
    }
}  
