<?php

use Illuminate\Database\Seeder;

class SubcatLevel1Seeder_C6 extends Seeder
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
			81 => array (
				'category_id' => 6,
				'name' => 'hamper',
				'description' => "Hampers",
				'created_at' => $now,
				'updated_at' => $now,
			),
			82 => array (
				'category_id' => 6,
				'name' => 'toy',
				'description' => "Toys",
				'created_at' => $now,
				'updated_at' => $now,
			),
			83 => array (
				'category_id' => 6,
				'name' => 'sports',
				'description' => "Sports Equipment",
				'created_at' => $now,
				'updated_at' => $now,
			),
		));
    }
}
