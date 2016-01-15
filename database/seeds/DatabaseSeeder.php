<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(\App\Team::class,20)->create();
       factory(\App\Match::class,50)->create();
       factory(\App\Player::class,22)->create();
       factory(\App\Statistic::class,4)->create();
    }
}
