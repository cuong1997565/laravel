<?php

use Illuminate\Database\Seeder;

class user extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$data = [
			[
				'name' => "user1",
				'email' => str_random(5) . '_' . '@gmail.com',
				'password' => '123456',
				'level' => '1',
				'image' => 'abc.png',
				'status' => '1',
			],
			[
				'name' => "user1",
				'email' => str_random(5) . '_' . '@gmail.com',
				'password' => '123456',
				'level' => '1',
				'image' => 'abc.png',
				'status' => '1',
			],
			[
				'name' => "user1",
				'email' => str_random(5) . '_' . '@gmail.com',
				'password' => '123456',
				'level' => '1',
				'image' => 'abc.png',
				'status' => '1',
			],
			[
				'name' => "user1",
				'email' => str_random(5) . '_' . '@gmail.com',
				'password' => '123456',
				'level' => '1',
				'image' => 'abc.png',
				'status' => '1',
			],
			[
				'name' => "user1",
				'email' => str_random(5) . '_' . '@gmail.com',
				'password' => '123456',
				'level' => '1',
				'image' => 'abc.png',
				'status' => '1',
			],
		];
		DB::table('users')->insert($data);
	}
}
