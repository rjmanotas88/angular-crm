<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Let's clear the users table first
       User::truncate();

       // Let's make sure everyone has the same password and
       // let's hash it before the loop, or else our seeder
       // will be too slow.
       $password = Hash::make('admin123');

       User::create([
           'name' => 'Administrator',
           'email' => 'admin@test.com',
           'password' => $password,
           'username' => 'admin'
       ]);
    }
}
