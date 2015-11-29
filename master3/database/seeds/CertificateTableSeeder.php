<?php

use Illuminate\Database\Seeder;

class CertificateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('certificate')->truncate();

        $now = \Carbon\Carbon::now()->toDateTimeString();
        \DB::table('certificate')->insert(array(
            0 => array(
                'merchant_id' => 1,
                'logo' => 'halal-1.png',
                'name' => 'Health Certificate Services Certified',
                'awarded' => $now,
                'description' => 'Received this award on November 2013 and change all the menu to halal',
                'deleted' => 0,
                'created_at' => $now,
                'updated_at' => $now
            ),
            1 => array(
                'merchant_id' => 1,
                'logo' => 'chinese_kitchen.jpg',
                'name' => 'Malaysia Government Halal Certificate Services Certified',
                'awarded' => '5-03-2015',
                'description' => 'Received this certification on March 2015 and change all the restaurants in Malaysia to become Halal Restaurant',
                'deleted' => 0,
                'created_at' => $now,
                'updated_at' => $now
            ),
        ));
    }
}
