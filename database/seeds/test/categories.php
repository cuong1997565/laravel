<?php

use Illuminate\Database\Seeder;

class categories extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$data = [
			[
				'name' => str_random(5) . "_name",
				'slug' => str_random(5) . '_slug',
			],
			[
				'name' => str_random(5) . "_name",
				'slug' => str_random(5) . '_slug',
			],
			[
				'name' => str_random(5) . "_name",
				'slug' => str_random(5) . '_slug',
			],
			[
				'name' => str_random(5) . "_name",
				'slug' => str_random(5) . '_slug',
			],
			[
				'name' => str_random(5) . "_name",
				'slug' => str_random(5) . '_slug',
			],
			[
				'name' => str_random(5) . "_name",
				'slug' => str_random(5) . '_slug',
			],
			[
				'name' => str_random(5) . "_name",
				'slug' => str_random(5) . '_slug',
			],
			[
				'name' => str_random(5) . "_name",
				'slug' => str_random(5) . '_slug',
			],
		];
		DB::table('categories')->insert($data);
	}
}
