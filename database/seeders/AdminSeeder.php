<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::create([
        'name'=> 'FioriFavola',
        'email' => 'fiorifavola@noreply.com',
        'password'=> Hash::make('password1'),
        'is_admin'=> true
       ]);
    }
}
