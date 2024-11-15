<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;
    protected $fillable = ['codigo', 'nombre', 'modalidad', 'requisito'];

    // Relación uno a muchos con Grupos
    public function grupos()
    {
        return $this->hasMany(Grupo::class);
    }
}
