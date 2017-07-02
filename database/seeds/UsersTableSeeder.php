<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstName' => 'Admin',
            'email' => 'admin@hrm.com',
            'password' => Hash::make('admin'),
            'surname' => 'User',
            'birthDate' => date('Y-m-d'),
        ]);
    }
}
