<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::insert([
            [
            'name' => 'admin1',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
            'remember_token' => Str::random(60),
            ],
            [
                'name' => 'putra',
                'role' => 'kasir',
                'email' => 'putra@gmail.com',
                'password' => bcrypt('12345'),
                'remember_token' => Str::random(60),
            ]
        ]);
    }
}
