<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'docente_id', 'salon', 'capacidad', 'fecha_inicio', 'fecha_finalizacion', 'curso_id', 'periodo_academico_id'];

// Relación con Usuario (Docente)
public function docente()
{
    return $this->belongsTo(Usuario::class, 'docente_id');
}

// Relación con Curso
public function curso()
{
    return $this->belongsTo(Curso::class);
}

// Relación con Periodo Académico
public function periodoAcademico()
{
    return $this->belongsTo(PeriodoAcademico::class);
}

// Relación con Matrículas
public function matriculas()
{
    return $this->hasMany(Matricula::class);
}
}
