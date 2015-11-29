<?php

use Illuminate\Database\Seeder;

class SubcatLevel1Seeder_C9 extends Seeder
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
				'category_id' => 9,
				'name' => 'interior',
				'description' => "Interior Furnishing",
				'created_at' => $now,
				'updated_at' => $now,
			),
			2 => array (
				'category_id' => 9,
				'name' => 'building_material',
				'description' => "Building Material & Hardware",
				'created_at' => $now,
				'updated_at' => $now,
			),
			3 => array (
				'category_id' => 9,
				'name' => 'construction_accessories',
				'description' => "Construction Accessories",
				'created_at' => $now,
				'updated_at' => $now,
			),
			4 => array (
				'category_id' => 9,
				'name' => 'buildings_protection_security',
				'description' => "Buildings Proection & Security",
				'created_at' => $now,
				'updated_at' => $now,
			),
			5 => array (
				'category_id' => 9,
				'name' => 'building_structure_traffic',
				'description' => "Building Structure & Traffic",
				'created_at' => $now,
				'updated_at' => $now,
			),
			6 => array (
				'category_id' => 9,
				'name' => 'installation_buildings',
				'description' => "Installations in Buildings",
				'created_at' => $now,
				'updated_at' => $now,
			),
			7 => array (
				'category_id' => 9,
				'name' => 'airport',
				'description' => "Airport Construction",
				'created_at' => $now,
				'updated_at' => $now,
			),
			8 => array (
				'category_id' => 9,
				'name' => 'water_sewerage',
				'description' => "water & Sewerage Construction",
				'created_at' => $now,
				'updated_at' => $now,
			),
			9 => array (
				'category_id' => 9,
				'name' => 'bridge',
				'description' => "Bridge Construction",
				'created_at' => $now,
				'updated_at' => $now,
			),
			10 => array (
				'category_id' => 9,
				'name' => 'railways',
				'description' => "Railways Construction",
				'created_at' => $now,
				'updated_at' => $now,
			),
			11 => array (
				'category_id' => 9,
				'name' => 'tunnel',
				'description' => "Tunnel Construction",
				'created_at' => $now,
				'updated_at' => $now,
			),
		));
    }
}
