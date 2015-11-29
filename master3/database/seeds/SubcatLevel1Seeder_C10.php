<?php

use Illuminate\Database\Seeder;

class SubcatLevel1Seeder_C10 extends Seeder
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
			1 => array (
				'category_id' => 10,
				'name' => 'stationery',
				'description' => "Business Service & Stationery ",
				'created_at' => $now,
				'updated_at' => $now,
			),
			2 => array (
				'category_id' => 10,
				'name' => 'science',
				'description' => "Science, Chemical & Laboratory Equipment",
				'created_at' => $now,
				'updated_at' => $now,
			),
			3 => array (
				'category_id' => 10,
				'name' => 'medical',
				'description' => "Optical, Medicine and Hospital Equipment",
				'created_at' => $now,
				'updated_at' => $now,
			),
			4 => array (
				'category_id' => 10,
				'name' => 'printing',
				'description' => "Printing, General Industrial Tools & Equipment",
				'created_at' => $now,
				'updated_at' => $now,
			),
			5 => array (
				'category_id' => 10,
				'name' => 'component',
				'description' => "Component Material & Parts",
				'created_at' => $now,
				'updated_at' => $now,
			),
			6 => array (
				'category_id' => 10,
				'name' => 'electrical',
				'description' => "Electrical, Engineering, Machinery & Parts",
				'created_at' => $now,
				'updated_at' => $now,
			),
			7 => array (
				'category_id' => 10,
				'name' => 'filtration',
				'description' => "Purified water & Industrial Filtration",
				'created_at' => $now,
				'updated_at' => $now,
			),
			8 => array (
				'category_id' => 10,
				'name' => 'environmental',
				'description' => "Environmental Protection Machinery",
				'created_at' => $now,
				'updated_at' => $now,
			),
			9 => array (
				'category_id' => 10,
				'name' => 'swimming',
				'description' => "Swimming Pool, Diving Equipment & Accessories",
				'created_at' => $now,
				'updated_at' => $now,
			),
			10 => array (
				'category_id' => 10,
				'name' => 'heavy',
				'description' => "Heavy Industrial",
				'created_at' => $now,
				'updated_at' => $now,
			),
			11 => array (
				'category_id' => 10,
				'name' => 'industry_detergent',
				'description' => "Industrial Detergent",
				'created_at' => $now,
				'updated_at' => $now,
			),

		));
    }
}
