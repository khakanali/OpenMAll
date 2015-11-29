<?php

use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('team')->truncate();
        $now = \Carbon\Carbon::now()->toDateTimeString();
        \DB::table('team')->insert(array (
            0 => array(
                'merchant_id' => 1,
                'full_name'   => 'Mr Muhabet Ibrahim',
                'post'        => 'Director',
                'description' => 'Guest will also have a change to enjoy Arabic Tea, Turkish Tea and many more type middle east teas that will definetely uplift their sense',
                'photo'       => 'wilkeshr.jpg',
                'deleted'     => 0,
                'created_at'  => $now,
                'updated_at'  => $now
            ),
            1 => array(
                'merchant_id' => 1,
                'full_name'   => 'Mr Sina Ibrahim',
                'post'        => 'Marketing Manager',
                'description' => 'Guest will also have a chance to enjoy Arabic culture definetely uplift their sense',
                'photo'       => '454137919.jpg',
                'deleted'     => 0,
                'created_at'  => $now,
                'updated_at'  => $now
            ),
            2 => array(
                'merchant_id' => 1,
                'full_name'   => 'Mr William Gift',
                'post'        => 'Chef',
                'description' => 'Guest will also have a chance to enjoy Arabic food and the atmosphere of wonderful Arabic culture',
                'photo'       => 'chef_thomas.jpg',
                'deleted'     => 0,
                'created_at'  => $now,
                'updated_at'  => $now
            )
        ));
    }
}
