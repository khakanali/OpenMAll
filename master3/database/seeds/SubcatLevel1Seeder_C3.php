<?php

use Illuminate\Database\Seeder;

class SubcatLevel1Seeder_C3 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$now = \Carbon\Carbon::now()->toDateTimeString();
		\DB::table('subcat_level_1')->insert(array (
 			33 => array (
				'category_id' => 3,
				'name' => 'wellness',
				'description' => 'wellness Food',
				'created_at' => $now,
				'updated_at' => $now,
			),
 			34 => array (
				'category_id' => 3,
				'name' => 'organic',
				'description' => 'Organic Food',
				'created_at' => $now,
				'updated_at' => $now,
			),
 			35 => array (
				'category_id' => 3,
				'name' => 'oat',
				'description' => 'Oat & Cereal',
				'created_at' => $now,
				'updated_at' => $now,
			),
 			36 => array (
				'category_id' => 3,
				'name' => 'biscuit',
				'description' => 'Biscuit & Cookies',
				'created_at' => $now,
				'updated_at' => $now,
			),
 			37 => array (
				'category_id' => 3,
				'name' => 'cake',
				'description' => 'Cakes & Desserts',
				'created_at' => $now,
				'updated_at' => $now,
			),
 			38 => array (
				'category_id' => 3,
				'name' => 'herb',
				'description' => 'Herbs',
				'created_at' => $now,
				'updated_at' => $now,
			),
 			39 => array (
				'category_id' => 3,
				'name' => 'chocolate',
				'description' => 'Chocolates & Candies',
				'created_at' => $now,
				'updated_at' => $now,
			),
 			40 => array (
				'category_id' => 3,
				'name' => 'nonhalal',
				'description' => 'Non-Halal Food',
				'created_at' => $now,
				'updated_at' => $now,
			),
 			41 => array (
				'category_id' => 3,
				'name' => 'bread',
				'description' => 'Bread',
				'created_at' => $now,
				'updated_at' => $now,
			),
 			42 => array (
				'category_id' => 3,
				'name' => 'dried',
				'description' => 'Dried Food',
				'created_at' => $now,
				'updated_at' => $now,
			),
 			43 => array (
				'category_id' => 3,
				'name' => 'chinese',
				'description' => 'Chinese Food',
				'created_at' => $now,
				'updated_at' => $now,
			),
 			44 => array (
				'category_id' => 3,
				'name' => 'malay',
				'description' => 'Malay Food',
				'created_at' => $now,
				'updated_at' => $now,
			),
 			45 => array (
				'category_id' => 3,
				'name' => 'indian',
				'description' => 'Indian Food',
				'created_at' => $now,
				'updated_at' => $now,
			),
 			46 => array (
				'category_id' => 3,
				'name' => 'japanese',
				'description' => 'Japanese Food',
				'created_at' => $now,
				'updated_at' => $now,
			),
 			47 => array (
				'category_id' => 3,
				'name' => 'italian',
				'description' => 'Italian Food',
				'created_at' => $now,
				'updated_at' => $now,
			),
 			48 => array (
				'category_id' => 3,
				'name' => 'mexican',
				'description' => 'Mexican Food',
				'created_at' => $now,
				'updated_at' => $now,
			),
 			49 => array (
				'category_id' => 3,
				'name' => 'western',
				'description' => 'Western',
				'created_at' => $now,
				'updated_at' => $now,
			),
 			50 => array (
				'category_id' => 3,
				'name' => 'vegetarian',
				'description' => 'Vegetarian',
				'created_at' => $now,
				'updated_at' => $now,
			),
		));
    }
}
