<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
        'fname' => 'Nadeesha',
        'lname' => 'Perera',
        'dob' => '1987/07/14',
        'gender' => 'Female',
        'email' => 'nadudhh@gmail.com',
        'c_number' => '0769109480',
        'password' => 'nadu23456',
       ],[
        'fname' => 'Nadun',
        'lname' => 'Perera',
        'dob' => '2000/08/14',
        'gender' => 'Male',
        'email' => 'nadurdmmm@gmail.com',
        'c_number' => '0769109400',
        'password' => 'nadu123456',
    ],[
        'fname' => 'Kavya',
        'lname' => 'Perera',
        'dob' => '1997/01/14',
        'gender' => 'Female',
        'email' => 'nadukd@gmail.com',
        'c_number' => '0769119400',
        'password' => 'kavya123456',
    ],[
        'fname' => 'Kalpa',
        'lname' => 'Perera',
        'dob' => '1988/09/03',
        'gender' => 'Male',
        'email' => 'kalpa@gmail.com',
        'c_number' => '0779109400',
        'password' => 'kal123456',
    ],[
        'fname' => 'Fathima',
        'lname' => 'Nafra',
        'dob' => '1990/07/24',
        'gender' => 'Female',
        'email' => 'fahi@gmail.com',
        'c_number' => '0769189400',
        'password' => 'fathi123456',
    ],[
        'fname' => 'Ruwan',
        'lname' => 'Lanka',
        'dob' => '2002/03/14',
        'gender' => 'Male',
        'email' => 'lanka@gmail.com',
        'c_number' => '0769189400',
        'password' => 'lanka123456',
       ]);
    }
}
