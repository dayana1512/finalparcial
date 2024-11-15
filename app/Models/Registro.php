<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    protected $fillable = ['estado'];

    // Relación uno a muchos con Matrículas
    public function matriculas()
    {
        return $this->hasMany(Matricula::class);
    }
}
