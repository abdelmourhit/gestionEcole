<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
