<?php

use Illuminate\Database\Seeder;

class Product extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$data = [
			[
				'name' => str_random(5) . '_iphone',
				'slug' => str_random(5) . '_' . 'iphone',
				'price' => 10000,
				'cate_id' => 1,
				'description' => str_random(5) . '_' . 'vdsvs',
				'image' => str_random(5) . '_' . 'vsvs',
				'promotion' => str_random(5) . '_' . 'vsvs',
				'quantity' => 5,
				'status' => 1,
				'warranty' => str_random(5) . '_' . 'vsvs',
			],
			[
				'name' => str_random(5) . '_iphone',
				'slug' => str_random(5) . '_' . 'iphone',
				'price' => 10000,
				'cate_id' => 1,
				'description' => str_random(5) . '_' . 'vdsvs',
				'image' => str_random(5) . '_' . 'vsvs',
				'promotion' => str_random(5) . '_' . 'vsvs',
				'quantity' => 5,
				'status' => 1,
				'warranty' => str_random(5) . '_' . 'vsvs',
			],
			[
				'name' => str_random(5) . '_iphone',
				'slug' => str_random(5) . '_' . 'iphone',
				'price' => 10000,
				'cate_id' => 1,
				'description' => str_random(5) . '_' . 'vdsvs',
				'image' => str_random(5) . '_' . 'vsvs',
				'promotion' => str_random(5) . '_' . 'vsvs',
				'quantity' => 5,
				'status' => 1,
				'warranty' => str_random(5) . '_' . 'vsvs',
			],
			[
				'name' => str_random(5) . '_iphone',
				'slug' => str_random(5) . '_' . 'iphone',
				'price' => 10000,
				'cate_id' => 1,
				'description' => str_random(5) . '_' . 'vdsvs',
				'image' => str_random(5) . '_' . 'vsvs',
				'promotion' => str_random(5) . '_' . 'vsvs',
				'quantity' => 5,
				'status' => 1,
				'warranty' => str_random(5) . '_' . 'vsvs',
			],
			[
				'name' => str_random(5) . '_iphone',
				'slug' => str_random(5) . '_' . 'iphone',
				'price' => 10000,
				'cate_id' => 1,
				'description' => str_random(5) . '_' . 'vdsvs',
				'image' => str_random(5) . '_' . 'vsvs',
				'promotion' => str_random(5) . '_' . 'vsvs',
				'quantity' => 5,
				'status' => 1,
				'warranty' => str_random(5) . '_' . 'vsvs',
			],
			[
				'name' => str_random(5) . '_iphone',
				'slug' => str_random(5) . '_' . 'iphone',
				'price' => 10000,
				'cate_id' => 1,
				'description' => str_random(5) . '_' . 'vdsvs',
				'image' => str_random(5) . '_' . 'vsvs',
				'promotion' => str_random(5) . '_' . 'vsvs',
				'quantity' => 5,
				'status' => 1,
				'warranty' => str_random(5) . '_' . 'vsvs',
			],
		];
		DB::table('products')->insert($data);
	}
}
