<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    public $timestamps = false;

    public function pedido()
    {
        return $this->belongTo('App\Pedido');
    }
}
