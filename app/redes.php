<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class redes extends Model
{
    protected $table = "redes";

    protected $fillable = ["direccion","icono","nombre","ruta","fecha"];
}
