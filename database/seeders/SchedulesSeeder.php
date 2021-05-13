<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schedule;


class SchedulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $Schedule1=Schedule::create([
        'id_class' => '1',
		'time_start' => '2021-04-21 23:46:00',
		'time_end' => '2021-04-21 23:46:00',
		'day' => '2021-04-21',
       ]);

       $Schedule1=Schedule::create([
        'id_class' => '2',
		'time_start' => '2021-04-22 23:46:00',
		'time_end' => '2021-04-22 23:46:00',
		'day' => '2021-04-22',
       ]);

       $Schedule1=Schedule::create([
        'id_class' => '1',
		'time_start' => '2021-04-28 23:46:00',
		'time_end' => '2021-04-28 23:46:00',
		'day' => '2021-04-28',
       ]);

    }
}
