<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $guarded = [];

    protected $dates = ['arrived_at'];
}
