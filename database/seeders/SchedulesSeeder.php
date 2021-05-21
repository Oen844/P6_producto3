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
		'day' => '2021-04-22',
       ]);

       $Schedule2=Schedule::create([
        'id_class' => '2',
		'time_start' => '2021-04-22 23:46:00',
		'time_end' => '2021-04-22 23:46:00',
		'day' => '2021-04-27',
       ]);


       $Schedule3=Schedule::create([
        'id_class' => '1',
		'time_start' => '2021-04-21 23:46:00',
		'time_end' => '2021-04-21 23:46:00',
		'day' => '2021-04-24',

       ]);

       $Schedule4=Schedule::create([
        'id_class' => '2',
		'time_start' => '2021-04-26 23:46:00',
		'time_end' => '2021-04-26 23:56:00',
		'day' => '2021-04-26',

       ]);
       $Schedule5=Schedule::create([
        'id_class' => '3',
		'time_start' => '2021-04-29 23:46:00',
		'time_end' => '2021-04-29 23:56:00',
		'day' => '2021-04-29',

       ]);

       $Schedule6=Schedule::create([
        'id_class' => '3',
		'time_start' => '2021-04-10 23:46:00',
		'time_end' => '2021-04-10 23:56:00',
		'day' => '2021-04-10',

       ]);

       $Schedule7=Schedule::create([
        'id_class' => '1',
		'time_start' => '2021-04-12 23:46:00',
		'time_end' => '2021-04-12 23:56:00',
		'day' => '2021-04-12',

       ]);

       $Schedule8=Schedule::create([
        'id_class' => '1',
		'time_start' => '2021-04-2 23:46:00',
		'time_end' => '2021-04-2 23:56:00',
		'day' => '2021-04-12',

       ]);

    }
}
