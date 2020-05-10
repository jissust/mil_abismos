<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class show extends Model
{
    protected $table = "shows";
    protected $fillable = ["titulo","texto","fecha","ruta_imagen"];
}
