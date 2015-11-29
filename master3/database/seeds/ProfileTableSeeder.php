<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('profile')->truncate();
        $now = \Carbon\Carbon::now()->toDateTimeString();
        \DB::table('profile')->insert(array (
            0 => array(
                'album_id' => 1,
                'theme_id' => 1,
                'signboard_id' => 1,
                'bunting_id' => 1,
                'vbanner_id' => 1,
                'created_at' => $now,
                'updated_at' => $now
            )
        ) );
    }
}
