<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Linea extends Model
{
    public $timestamps = false;

    public function pedido()
    {
        return $this->belongTo('App\Pedido');
    }

    public function producto()
    {
        return $this->hasOne('App\Producto');
    }
}
