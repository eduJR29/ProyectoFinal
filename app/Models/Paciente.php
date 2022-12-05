<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paciente extends Model
{
    use HasFactory;
    use SoftDeletes; 
    protected $fillable = ['nombre', 'apellidop', 'apellidom', 'sexo', 'edad', 'telefono', 'direccion'];
    public $timestamps = false;

    public function citas()
    {
        return $this->hasMany(Cita::class);
    }

    public function medicamentos()
    {
        return  $this->belongsToMany(Medicamento::class);
    }

    public function archivos()
    {
        return $this->hasMany(Archivo::class);
    }

}
