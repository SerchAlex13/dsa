<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'domicilio', 'total'];

    public function carritos()
    {
        return $this->hasMany(Carrito::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
