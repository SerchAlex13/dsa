<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'codigo', 'tipo', 'imagen', 'descripcion', 'tela', 'precio', 'inventario'];
    //protected $guarded = ['id'];
    public $timestamps = false;

    public function carritos()
    {
        return $this->hasMany(Carrito::class);
    }

    public function tallas()
    {
        return $this->belongsToMany(Talla::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }
}
