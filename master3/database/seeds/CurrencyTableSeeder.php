<?php

use Illuminate\Database\Seeder;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\DB::table('currency')->truncate();
        $now = \Carbon\Carbon::now()->toDateTimeString();
		\DB::table('currency')->insert(array (
			0 => array (
				'code' => 'myr',
				'name' => 'ringgit',
				'description' => 'Malaysian Ringgit',
				'created_at' => $now,
				'updated_at' => $now,
			),
			1 => array (
				'code' => 'usd',
				'name' => 'dollar',
				'description' => 'US Dollar',
				'created_at' => $now,
				'updated_at' => $now,
			),
		));
    }
}
