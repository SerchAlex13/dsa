<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prenda extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = ['nombre', 'codigo', 'tipo', 'descripcion', 'tela', 'precio'];
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

    public function archivos()
    {
        return $this->hasMany(Archivo::class);
    }
}
