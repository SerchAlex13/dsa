<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'tipo', 'descripcion', 'color', 'talla', 'tela', 'inventario'];
    //protected $guarded = ['id'];
    public $timestamps = false;
}
