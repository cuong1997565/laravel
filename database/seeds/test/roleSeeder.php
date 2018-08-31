<?php

use Illuminate\Database\Seeder;

class roleSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$data = [
			[
				'name' => 'role1',
				'display_name' => 'role_display1',
				'description' => 'is role 1',
			],

			[
				'name' => 'role2',
				'display_name' => 'role_display22',
				'description' => 'is role 22',
			],
			[
				'name' => 'role3',
				'display_name' => 'role_display3',
				'description' => 'is role 3',
			],
			[
				'name' => 'role4',
				'display_name' => 'role_display4',
				'description' => 'is role 4',
			],
		];
		DB::table('roles')->insert($data);
	}
}
