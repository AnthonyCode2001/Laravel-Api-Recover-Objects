<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitudes extends Model
{
    use HasFactory;
    protected $fillable = ['cedula'];
    //, 'nombre_objeto', 'color', 'price', 'detalles', 'tipo_objeto'
}