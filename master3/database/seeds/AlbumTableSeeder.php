<?php

use Illuminate\Database\Seeder;

class AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('album')->truncate();

        $now = \Carbon\Carbon::now()->toDateTimeString();

        \DB::table('album')->insert(array (
            0 => array(
                'merchant_id' => '26',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            1 => array(
                'merchant_id' => '91',
                'created_at' => $now,
                'updated_at' => $now,
            ),
        ));
    }
}
