<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeria extends Model
{
    protected $table = "galerias";
    protected $fillable = ["titulo","imagen","orden","fecha"];
}
