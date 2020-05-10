<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    protected $table = "homes";
    protected $fillable = ["ruta","fecha","visualizar","file"];
}
