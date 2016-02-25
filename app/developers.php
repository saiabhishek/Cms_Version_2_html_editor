<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class developers extends Model
{
   protected $table='developers';
    protected $fillable = [
        'header', 'name',
    ];
}
