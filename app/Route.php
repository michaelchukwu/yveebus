<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
        'from', 'to', 'time', 'duration', 'amount', 'active'
    ];
}