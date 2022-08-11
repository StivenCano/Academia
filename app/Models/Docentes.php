<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docentes extends Model
{
    protected $fillable = ['nombre', 'apellido', 'tituloUniv', 'edad', 'fecha_contrato', 'imagen', 'documento'];
    use HasFactory;
}
