<?php

use Illuminate\Database\Seeder;

class SubcatLevel1Seeder_C7 extends Seeder
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
			84 => array (
				'category_id' => 7,
				'name' => 'car',
				'description' => "Car Care Kits",
				'created_at' => $now,
				'updated_at' => $now,
			),
			85 => array (
				'category_id' => 7,
				'name' => 'tool',
				'description' => "Tools & Equipment ",
				'created_at' => $now,
				'updated_at' => $now,
			),
			86 => array (
				'category_id' => 7,
				'name' => 'interior',
				'description' => "Interior Accessories",
				'created_at' => $now,
				'updated_at' => $now,
			),
			87 => array (
				'category_id' => 7,
				'name' => 'exterior',
				'description' => "Exterior Accessories",
				'created_at' => $now,
				'updated_at' => $now,
			),
			88 => array (
				'category_id' => 7,
				'name' => 'bicycle',
				'description' => "Bicycles & Accessories",
				'created_at' => $now,
				'updated_at' => $now,
			),
			89 => array (
				'category_id' => 7,
				'name' => 'motorcycle',
				'description' => "Motorcycles & Accessories",
				'created_at' => $now,
				'updated_at' => $now,
			),
			90 => array (
				'category_id' => 7,
				'name' => 'car_detergent',
				'description' => "Car Detergent",
				'created_at' => $now,
				'updated_at' => $now,
			),

		));
    }
}
