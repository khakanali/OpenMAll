<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('role')->truncate();
        $now = \Carbon\Carbon::now()->toDateTimeString();
		\DB::table('role')->insert(array (
			0 => array (
				'code' => 'adm',
				'name' => 'adminstrator',
				'description' => 'Administrator',
				'created_at' => $now,
				'updated_at' => $now,
			),
			1 => array (
				'code' => 'byr',
				'name' => 'buyer',
				'description' => 'Buyer',
				'created_at' => $now,
				'updated_at' => $now,
			),
			2 => array (
				'code' => 'mer',
				'name' => 'merchant',
				'description' => 'Merchant',
				'created_at' => $now,
				'updated_at' => $now,
			),
			3 => array (
				'code' => 'dlr',
				'name' => 'dealer',
				'description' => 'Dealer',
				'created_at' => $now,
				'updated_at' => $now,
			),
			4 => array (
				'code' => 'smm',
				'name' => 'social_media_marketeer',
				'description' => 'Social Media Marketeer',
				'created_at' => $now,
				'updated_at' => $now,
			),
			5 => array (
				'code' => 'mct',
				'name' => 'merchant_consultant',
				'description' => 'Merchant Consultant',
				'created_at' => $now,
				'updated_at' => $now,
			),
			6 => array (
				'code' => 'opw',
				'name' => 'openwish',
				'description' => 'OpenWish User',
				'created_at' => $now,
				'updated_at' => $now,
			),
		));
	}

}
