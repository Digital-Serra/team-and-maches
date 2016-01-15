<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'team1_id',
        'team2_id',
        'team1_goals',
        'team2_goals',
        'city',
        'date',
        'team_type',
    ];

    public function local()
    {
        return $this->belongsTo(Team::class,'team1_id');
    }

    public function visitant()
    {
        return $this->belongsTo(Team::class,'team2_id');
    }
}
