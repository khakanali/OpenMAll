<?php

use Illuminate\Database\Seeder;

class SubcatLevel2Seeder_C10 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\DB::table('subcat_level_2')->truncate();

		// Industrial, category_id=10
		// Industrial Detergent, subcat_level_2_id=121

		$now = \Carbon\Carbon::now()->toDateTimeString();
		\DB::table('subcat_level_2')->insert(array (
			0 => array (
				'category_id' => 10,
				'subcat_level_1_id' => 121,
				'name' => 'cleaning_solution',
				'description' => 'Cleaning Solution',
				'created_at' => $now,
				'updated_at' => $now,
			),
			1 => array (
				'category_id' => 10,
				'subcat_level_1_id' => 121,
				'name' => 'commercial_detergent',
				'description' => 'Commercial Detergent',
				'created_at' => $now,
				'updated_at' => $now,
			),
			2 => array (
				'category_id' => 10,
				'subcat_level_1_id' => 121,
				'name' => 'car_care_solution',
				'description' => 'Car Care Solution',
				'created_at' => $now,
				'updated_at' => $now,
			),
		));
    }
}
