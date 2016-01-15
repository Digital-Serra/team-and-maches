<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $fillable = [
        'matches',
        'victories',
        'draws',
        'defeats',
        'goals_scored',
        'goals_conceded',
        'yellow_cards',
        'red_cards',
        'harnessing',
        'frequency',
        'unrealized_matches',
        'predicted_matches',
        'year',
    ];
}
