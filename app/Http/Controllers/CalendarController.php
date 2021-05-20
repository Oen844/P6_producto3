<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Calendar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CalendarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $id = Auth::user()->id;
        $user = Auth::user()->tipo;
        if ($user == 2) {
            // $calendarSchedules = DB::table('schedules')
            //     ->join('asignaturas', function ($join) {
            //         $join->on('asignaturas.id_schedule', '=', 'schedules.');
            //     })
            //     ->get();

            $calendarSchedules = "";

            return view('calendar.index', compact('calendarSchedules'));
        }
    }
}
