<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //To make Random Entry
        DB::table('users')->insert(
            [
                'name' => "amol",
                'email' => "amol@gmail.com",
                'password' => Hash::make('12345'),
            ]
        );
    }
}
