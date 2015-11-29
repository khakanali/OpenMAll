<?php

use Illuminate\Database\Seeder;

class SignboardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('signboard')->truncate();

        $now = \Carbon\Carbon::now()->toDateTimeString();

        \DB::table('signboard')->insert(array (
            0 => array(
                'album_id' => '1',
                'path' => 'signboard.jpg',
                'created_at' => $now,
                'updated_at' => $now
            )
        ));
    }
}
