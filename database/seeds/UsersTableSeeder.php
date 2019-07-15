<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Silvio Ramirez',
            'phone'  	=> '0426-4051567',
            'email'     => 'silvio.ramirez.m@gmail.com',
            'password'  => 	Hash::make('123123'),
            'remember_token' => str_random(10)
        ]);  
    }
}
