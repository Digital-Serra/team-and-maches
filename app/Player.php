<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'name',
        'last_name',
        'number',
        'position',
        'image',
        'image_ext',
        'team_type',
    ];
}
