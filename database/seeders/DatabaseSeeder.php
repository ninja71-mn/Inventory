<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            ['first_name' => 'Mohammad',
                'last_name' => 'Daryakesh',
                'email' => 'email@email.com',
                'phone' => '09362656364',
                'email_verified_at' => now(),
                'created_at' => now(),
                'password' => bcrypt('123456'), // password
                'remember_token' => Str::random(10),
            ],

        ]);
    }
}
