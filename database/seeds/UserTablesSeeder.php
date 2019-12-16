<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' 	=> 'Naratama',
        	'status' => 'user',
        	'password' => Hash::make('password'),
        	'remember_token'=> Str::random(12),
        ]);
    }
}
