<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;
class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'movie_name' => 'SpiderMan',
                'director' => 'jon watts',
                'created_at' => Carbon::now(),

            ],
            [
                'movie_name' => 'SuperMan',
                'director' => 'Richard Donner',
                'created_at' => Carbon::now(),
            ],
            [
                'movie_name' => 'Into the wild',
                'director' => 'Sean Penn',
                'created_at' => Carbon::now(),
            ],
            [
                'movie_name' => 'Pursuit of happiness',
                'director' => 'Gabriele Muccino',
                'created_at' => Carbon::now(),
            ],
            [
                'movie_name' => 'Flight',
                'director' => 'Robert Zemeckis',
                'created_at' => Carbon::now(),
            ],

            [
                'movie_name' => 'Into the Wild',
                'director' => 'Sean Penn',
                'created_at' => Carbon::now(),
            ],

            [
                'movie_name' => 'The Motorcycle Diaries',
                'director' => 'Walter Salles',
                'created_at' => Carbon::now(),
            ],

            [
                'movie_name' => 'Joker',
                'director' => 'Todd Phillips',
                'created_at' => Carbon::now(),
            ],



        ]);
    }
}
