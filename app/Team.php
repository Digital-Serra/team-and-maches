<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
        'city',
        'logo',
        'logo_ext'
    ];

    public function matches()
    {
        return $this->hasMany(Match::class,'team2_id')->orWhere('team1_id',$this->id);
    }
}
