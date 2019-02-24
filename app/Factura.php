<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    public $timestamps = false;

    public function pedido(){
        return $this->hasOne('App\Pedido');
    }
}
