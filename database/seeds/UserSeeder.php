<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
        	'name' =>  'juan Perez',
        	'email' => 'example@example.com',
        	'password' =>  Hash::make('123admin'),
        ]);
    }
}
