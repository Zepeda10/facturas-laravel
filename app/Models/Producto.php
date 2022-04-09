<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'precio',
        'impuesto'
    ];

    //Relación uno a muchos
    public function compras(){
    	return $this->hasMany('App\Models\Compra');
    }

    //Relación uno a muchos
    public function facturas(){
    	return $this->hasMany('App\Models\Factura');
    }
}
