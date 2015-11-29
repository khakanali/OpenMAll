<?php

use Illuminate\Database\Seeder;

class AdslotproductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        \DB::table('adslotproduct')->truncate();

        $now = \Carbon\Carbon::now()->toDateTimeString();
        \DB::table('adslotproduct')->insert(array (
            0 => array (
                'adslot_id' => '1',
                'product_id' => '1',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            1 => array (
                'adslot_id' => '2',
                'product_id' => '2',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            2 => array (
                'adslot_id' => '3',
                'product_id' => '3',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            3 => array (
                'adslot_id' => '3',
                'product_id' => '4',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            4 => array (
                'adslot_id' => '3',
                'product_id' => '5',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            5 => array (
                'adslot_id' => '3',
                'product_id' => '6',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            6 => array (
                'adslot_id' => '4',
                'product_id' => '7',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            7 => array (
                'adslot_id' => '4',
                'product_id' => '8',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            8 => array (
                'adslot_id' => '4',
                'product_id' => '9',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            9 => array (
                'adslot_id' => '4',
                'product_id' => '10',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            10 => array (
                'adslot_id' => '4',
                'product_id' => '11',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            11 => array (
                'adslot_id' => '4',
                'product_id' => '12',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            12 => array (
                'adslot_id' => '4',
                'product_id' => '13',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            13 => array (
                'adslot_id' => '4',
                'product_id' => '14',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            14 => array (
                'adslot_id' => '4',
                'product_id' => '15',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            15 => array (
                'adslot_id' => '4',
                'product_id' => '16',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            16 => array (
                'adslot_id' => '4',
                'product_id' => '17',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            17 => array (
                'adslot_id' => '4',
                'product_id' => '18',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            18 => array (
                'adslot_id' => '4',
                'product_id' => '19',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            19 => array (
                'adslot_id' => '4',
                'product_id' => '20',
                'created_at' => $now,
                'updated_at' => $now,
            ),
            20 => array (
                'adslot_id' => '4',
                'product_id' => '21',
                'created_at' => $now,
                'updated_at' => $now,
            ),
        ));
    }
}
