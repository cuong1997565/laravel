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

        	'name'=>'cuong',
        	'email'=>'cuong1997@gmail.com',
        	'password'=> Hash::make('123456')
        	]);
    }
}
