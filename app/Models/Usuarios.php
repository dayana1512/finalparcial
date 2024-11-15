<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $fillable = ['nombre', 'tipo_rol', 'matriculas_id'];

    // Relación con Role
    public function role()
    {
        return $this->belongsTo(Role::class, 'tipo_rol');
    }

    // Relación con Matrícula
    public function matricula()
    {
        return $this->belongsTo(Matricula::class, 'matriculas_id');
    }

    // Relación con Grupo
    public function grupos()
    {
        return $this->hasMany(Grupo::class, 'docente_id');
    }
}