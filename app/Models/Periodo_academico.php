<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo_academico extends Model
{
    use HasFactory;
    protected $fillable = ['año', 'trimestre', 'nombre'];

    // Relación uno a muchos con Grupos
    public function grupos()
    {
        return $this->hasMany(Grupo::class);
    }
}
