<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class useSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name'=> 'pelanggan',
            'level'=> 'pelanggan',
            'email'=> 'pelanggan@classy.com',
            'password'=> bcrypt('12345'),
            'remember_token'=> Str::random(60),

        ]);

        User::create([
            'name'=> 'admin',
            'level'=> 'admin',
            'email'=> 'admin@classy.com',
            'password'=> bcrypt('12345'),
            'remember_token'=> Str::random(60),

        ]);
    }
}
