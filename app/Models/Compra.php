<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'subtotal',
        'impuesto',
        'total',
        'user_id',
        'producto_id'
    ];

    //Relación uno a muchos inversa
    public function producto(){
        return $this->belongsTo('App\Models\Producto');
    }

    //Relación uno a muchos inversa
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
