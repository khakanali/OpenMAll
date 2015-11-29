<?php

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('brand')->truncate();

		$now = \Carbon\Carbon::now()->toDateTimeString();
		\DB::table('brand')->insert(array(
			0 => 
			array (
				'id' => 1,
				'name' => 'Kleenso',
				'description' => 'Kleenso Resources is an OEM manufacturer for various established retailers and household brand names throughout Malaysia and across the ASEAN region and beyond.',
				'logo'=>'kleenso60.png',
				'created_at' => $now,
				'updated_at' => $now,
			),
			1 => array (
				'id' => 2,
				'name' => 'Red Bull',
				'description' => 'No Description',
				'logo'=>'red_bull_malaysia.png',
				'created_at' => $now,
				'updated_at' => $now,
			),
			2 => array (
				'id' => 3,
				'name' => 'TV',
				'description' => 'No Description',
				'logo'=>'tv_logo.png',
				'created_at' => $now,
				'updated_at' => $now,
			),
			3 => array (
				'id' => 4,
				'name' => 'Idea Store',
				'description' => 'No Description',
				'logo'=>'ideastore_0.png',
				'created_at' => $now,
				'updated_at' => $now,
			),
			4 => array (
				'id' => 5,
				'name' => 'My Sign',
				'description' => 'No Description',
				'logo'=>'mysign_community.png',
				'created_at' => $now,
				'updated_at' => $now,
			),
			5 => array (
				'id' => 6,
				'name' => 'Teratai',
				'description' => 'No Description',
				'logo'=>'teratai.png',
				'created_at' => $now,
				'updated_at' => $now,
			),
			6 => array (
				'id' => 7,
				'name' => 'Watch',
				'description' => 'No Description',
				'logo'=>'rw14_logo_co.png',
				'created_at' => $now,
				'updated_at' => $now,
			),
			7 => array (
				'id' => 8,
				'name' => 'Sun Rise',
				'description' => 'No Description',
				'logo'=>'sl_logo_with_tagline_tm_cs5.png',
				'created_at' => $now,
				'updated_at' => $now,
			),
		));
	}
}
