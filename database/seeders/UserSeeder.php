<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'              => 'Test user',
            'email'             => 'admin@gmail.com',
            'password'          => Hash::make('1234'),
            'remember_token'    => Str::random(10),
        ]);
    }
}
