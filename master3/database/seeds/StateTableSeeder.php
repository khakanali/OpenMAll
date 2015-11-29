<?php

use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\DB::table('state')->truncate();
        $now = \Carbon\Carbon::now()->toDateTimeString();
		\DB::table('state')->insert(array (
			0 => array (
				'name' => 'Johor',
				'code' => 'MY01',
				'country_code' => 'MYS',
				'created_at' => $now,
				'updated_at' => $now,
			),
			1 => array (
				'name' => 'Kedah',
				'code' => 'MY02',
				'country_code' => 'MYS',
				'created_at' => $now,
				'updated_at' => $now,
			),
			2 => array (
				'name' => 'Kelantan',
				'code' => 'MY03',
				'country_code' => 'MYS',
				'created_at' => $now,
				'updated_at' => $now,
			),
			3 => array (
				'name' => 'Melaka',
				'code' => 'MY04',
				'country_code' => 'MYS',
				'created_at' => $now,
				'updated_at' => $now,
			),
			4 => array (
				'name' => 'Negeri Sembilan',
				'code' => 'MY05',
				'country_code' => 'MYS',
				'created_at' => $now,
				'updated_at' => $now,
			),
			5 => array (
				'name' => 'Pahang',
				'code' => 'MY06',
				'country_code' => 'MYS',
				'created_at' => $now,
				'updated_at' => $now,
			),
			6 => array (
				'name' => 'Perak',
				'code' => 'MY07',
				'country_code' => 'MYS',
				'created_at' => $now,
				'updated_at' => $now,
			),
			7 => array (
				'name' => 'Perlis',
				'code' => 'MY08',
				'country_code' => 'MYS',
				'created_at' => $now,
				'updated_at' => $now,
			),
			8 => array (
				'name' => 'Pulau Pinang',
				'code' => 'MY09',
				'country_code' => 'MYS',
				'created_at' => $now,
				'updated_at' => $now,
			),
			9 => array (
				'name' => 'Sarawak',
				'code' => 'MY11',
				'country_code' => 'MYS',
				'created_at' => $now,
				'updated_at' => $now,
			),
			10 => array (
				'name' => 'Selangor',
				'code' => 'MY12',
				'country_code' => 'MYS',
				'created_at' => $now,
				'updated_at' => $now,
			),
			11 => array (
				'name' => 'Terengganu',
				'code' => 'MY13',
				'country_code' => 'MYS',
				'created_at' => $now,
				'updated_at' => $now,
			),
			12 => array (
				'name' => 'Kuala Lumpur',
				'code' => 'MY14',
				'country_code' => 'MYS',
				'created_at' => $now,
				'updated_at' => $now,
			),
			13 => array (
				'name' => 'Labuan',
				'code' => 'MY15',
				'country_code' => 'MYS',
				'created_at' => $now,
				'updated_at' => $now,
			),
			14 => array (
				'name' => 'Sabah',
				'code' => 'MY16',
				'country_code' => 'MYS',
				'created_at' => $now,
				'updated_at' => $now,
			),
			15 => array (
				'name' => 'Putrajaya',
				'code' => 'MY17',
				'country_code' => 'MYS',
				'created_at' => $now,
				'updated_at' => $now,
			),
		));
    }
}
