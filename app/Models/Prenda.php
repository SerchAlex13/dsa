<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'nombre', 'tipo', 'descripcion', 'color', 'tela', 'precio', 'inventario'];
    //protected $guarded = ['id'];
    public $timestamps = false;

    //Relacionar a la prenda con su usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function compras()
    {
        return $this->belongsToMany(Compra::class);
    }

    public function carritos()
    {
        return $this->hasMany(Carrito::class);
    }

    public function tallas()
    {
        return $this->belongsToMany(Talla::class);
    }
}
