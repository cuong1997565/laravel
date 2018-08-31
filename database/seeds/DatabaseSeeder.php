<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		$this->call(user::class);
	}
}

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
            ],
            [
                'name' => "user1",
                'email' => str_random(5) . '_' . '@gmail.com',
                'password' => '123456',
            ],
            [
                'name' => "user1",
                'email' => str_random(5) . '_' . '@gmail.com',
                'password' => '123456',
            ],
            [
                'name' => "user1",
                'email' => str_random(5) . '_' . '@gmail.com',
                'password' => '123456',
            ],
            [
                'name' => "user1",
                'email' => str_random(5) . '_' . '@gmail.com',
                'password' => '123456',

            ],
        ];
        DB::table('users')->insert($data);
    }
}
