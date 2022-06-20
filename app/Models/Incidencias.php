<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidencias extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'titulo', 'descripcion', 'aula', 'fcreacion', 'fmodificacion', 'fcierre', 'estado', 'correo', 'comentarios'
    ];
    protected $table ='incidencias';
}
