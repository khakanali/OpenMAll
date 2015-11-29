<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('category')->truncate();

		$now = \Carbon\Carbon::now()->toDateTimeString();
		\DB::table('category')->insert(array (
			0 => array (
				'name' => 'electronics',
				'description' => 'Electronics',
				'logo'=>'electronics.png',
				'floor'=>1,
				'color'=>'#185a72',
				'created_at' => $now,
				'updated_at' => $now,
			),
			1 => array (
				'name' => 'beauty',
				'logo'=>'beauty.png',
				'description' => 'Beauty & Health',
				'floor'=>2,
				'color'=>'#b06681',
				'created_at' => $now,
				'updated_at' => $now,
			),
			2 => array (
				'name' => 'food',
				'logo'=>'food.png',
				'description' => 'Food & Beverage',
				'floor'=>3,
				'color'=>'#801c36',
				'created_at' => $now,
				'updated_at' => $now,
			),
			3 => array (
				'name' => 'fashion',
				'logo'=>'fashion.png',
				'description' => 'Fashion',
				'floor'=>4,
				'color'=>'#b97880',
				'created_at' => $now,
				'updated_at' => $now,
			),
			4 => array (
				'name' => 'home',
				'logo'=>'home.png',
				'description' => 'Home & Furniture',
				'floor'=>5,
				'color'=>'#5d9742',
				'created_at' => $now,
				'updated_at' => $now,
			),
			5 => array (
				'name' => 'gift',
				'logo'=>'gift.png',
				'description' => 'Gifts & Souvenirs',
				'floor'=>6,
				'color'=>'#018385',
				'created_at' => $now,
				'updated_at' => $now,
			),
			6 => array (
				'name' => 'automotive',
				'description' => 'Automotive',
				'logo'=>'automotive.png',
				'floor'=>7,
				'color'=>'#668f93',
				'created_at' => $now,
				'updated_at' => $now,
			),
			7 => array (
				'name' => 'service',
				'description' => 'General Services',
				'logo'=>'service.png',
				'floor'=>8,
				'color'=>'#36808d',
				'created_at' => $now,
				'updated_at' => $now,
			),
			8 => array (
				'name' => 'construction',
				'logo'=>'construction.png',
				'description' => 'Construction',
				'floor'=>9,
				'color'=>'#6d7f81',
				'created_at' => $now,
				'updated_at' => $now,
			),
			9 => array (
				'name' => 'industrial',
				'description' => 'Industrial',
				'logo'=>'industrial.png',
				'floor'=>10,
				'color'=>'#b6760c',
				'created_at' => $now,
				'updated_at' => $now,
			),
		));
	}
}
