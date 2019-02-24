<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'imagen'
    ];

    public function categoria()
    {
        return $this->hasOne('App\Categoria');
    }
}
