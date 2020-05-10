<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fondos extends Model
{
    protected $table = "fondos";

    protected $fillable = ['ruta','nombre'];
}
