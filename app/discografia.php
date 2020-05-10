<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class discografia extends Model
{
    protected $table = "discografias";

    protected $fillable = ["titulo","imagen","fecha"];
}
