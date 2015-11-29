<?php

use Illuminate\Database\Seeder;

class MerchantCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('merchantcategory')->truncate();
        $now = \Carbon\Carbon::now()->toDateTimeString();
        \DB::table('merchantcategory')->insert(array (
            0 => array(
                'merchant_id' => 26,
                'category_id' => 2,
                'created_at'  => $now,
                'updated_at'  => $now
            ),
            1 => array(
                'merchant_id' => 26,
                'category_id' => 5,
                'created_at'  => $now,
                'updated_at'  => $now
            ),
            2 => array(
                'merchant_id' => 26,
                'category_id' => 7,
                'created_at'  => $now,
                'updated_at'  => $now
            ),
            3 => array(
                'merchant_id' => 26,
                'category_id' => 10,
                'created_at'  => $now,
                'updated_at'  => $now
            )
        ));
    }
}
