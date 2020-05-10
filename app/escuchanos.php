<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class escuchanos extends Model
{
    protected $table = "escuchanos";

    protected $fillable = ['imagen','texto','fecha'];
}
