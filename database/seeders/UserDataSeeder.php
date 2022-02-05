<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

use Carbon\Carbon;


class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@treblle.com',
                'password' =>bcrypt('P@ssw0rd'),
                'created_at' => Carbon::now(),

            ],
        ]);
    }
}
