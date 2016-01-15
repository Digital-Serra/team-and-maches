<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Team::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->colorName,
        'city' => $faker->city,
        'logo' => $faker->name,
        'logo_ext' => $faker->fileExtension,
    ];
});

$factory->define(App\Match::class, function (Faker\Generator $faker) {
    return [
        'team1_id' => App\Team::all()->random()->id,
        'team2_id' => App\Team::all()->random()->id,
        'team1_goals' => rand(1,10),
        'team2_goals' => rand(1,10),
        'team_type' => rand(0, 1) ? 'senior' : 'sub-15',
        'city' => $faker->city,
        'date' => $faker->dateTime,
    ];
});

$factory->define(App\Player::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'number' => rand(1,1000),
        'position' => $faker->word,
        'image' => $faker->name,
        'image_ext' => $faker->fileExtension,
        'team_type' =>  rand(0, 1) ? 'senior' : 'sub-15'
    ];
});

$factory->define(App\Statistic::class, function (Faker\Generator $faker) {
    return [
        'matches' => rand(0,200),
        'victories' => rand(0,200),
        'draws' => rand(0,200),
        'defeats' => rand(0,200),
        'goals_scored' => rand(0,200),
        'goals_conceded' => rand(0,200),
        'yellow_cards' => rand(0,20),
        'red_cards' => rand(0,10),
        'harnessing' => rand(0,50),
        'frequency' => rand(0,100),
        'unrealized_matches' => rand(0,10),
        'predicted_matches' => rand(0,30),
        'year' => rand(2012,2016),
    ];
});

$factory->define(App\MatchTeam::class, function (Faker\Generator $faker) {
    return [
        'match_id' => App\Match::all()->random()->id,
        'team1_id' => App\Team::all()->random()->id,
        'team2_id' => App\Team::all()->random()->id,
    ];
});
