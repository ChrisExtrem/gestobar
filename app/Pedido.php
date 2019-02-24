<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public $timestamps = false;

    public function lineas()
    {
        return $this->hasMany('App\Linea');
    }

    public function reserva()
    {
        return $this->hasOne('App\Reserva');
    }

    public function factura()
    {
        return $this->belongTo('App\Factura');
    }
}
