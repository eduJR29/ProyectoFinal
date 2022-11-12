<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellidop', 'apellidom', 'sexo', 'edad', 'telefono', 'direccion'];
    public $timestamps = false;
}
