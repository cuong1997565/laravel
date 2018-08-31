<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$permission = [
			[
				'name' => 'role-index',
				'display_name' => 'Role Listing',
				'description' => 'Xem danh sách Role',
			],

			[
				'name' => 'role-show',
				'display_name' => 'Role Detail',
				'description' => 'Xem chi tiết Role',
			],

			[
				'name' => 'role-store',
				'display_name' => 'Create Role',
				'description' => 'Thêm Role',
			],

			[
				'name' => 'role-edit',
				'display_name' => 'Edit Role',
				'description' => 'Sửa Role',
			],

			[
				'name' => 'role-update',
				'display_name' => 'Update Role',
				'description' => 'Cập nhật Role',
			],

			[
				'name' => 'role-destroy',
				'display_name' => 'Delete Role',
				'description' => 'Xóa Role',
			],

			[
				'name' => 'post-index',
				'display_name' => 'Display Post Listing',
				'description' => 'Xem danh sách Post',
			],

			[
				'name' => 'post-store',
				'display_name' => 'Create Post',
				'description' => 'Thêm Post',
			],

			[
				'name' => 'post-edit',
				'display_name' => 'Edit Post',
				'description' => 'Sửa Post',
			],

			[
				'name' => 'post-update',
				'display_name' => 'Update Post',
				'description' => 'Cập nhật Post',
			],

			[
				'name' => 'post-destroy',
				'display_name' => 'Delete Post',
				'description' => 'Xóa Post',
			],

			[
				'name' => 'category-index',
				'display_name' => 'Display Category Listing',
				'description' => 'Xem danh sách Category',
			],

			[
				'name' => 'category-store',
				'display_name' => 'Create Category',
				'description' => 'Thêm Category',
			],

			[
				'name' => 'category-edit',
				'display_name' => 'Edit Category',
				'description' => 'Sửa Category',
			],

			[
				'name' => 'category-update',
				'display_name' => 'Update Category',
				'description' => 'Cập nhật Category',
			],

			[
				'name' => 'category-destroy',
				'display_name' => 'Delete Category',
				'description' => 'Xóa Category',
			],
		];
		DB::table('permissions')->insert($permission);
	}
}
