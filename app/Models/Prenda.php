<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'user_id', 'tipo', 'descripcion', 'color', 'talla', 'tela', 'precio', 'inventario'];
    //protected $guarded = ['id'];
    public $timestamps = false;

    //Relacionar a la prenda con su usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
