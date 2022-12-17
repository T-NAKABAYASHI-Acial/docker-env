<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert(
            [
                'user_id' => '1',
                'event_name' => 'CRCUP',
                'game_name' => 'apex',
                'place' => 'オンライン',
                'event_start' => '2023-01-05',
                'event_end' => '2023-01-10',
                'recruit_start' => '2023-01-01',
                'recruit_end' => '2023-01-04',
                'maximum' => '10',
            ]
        );
    }
}
