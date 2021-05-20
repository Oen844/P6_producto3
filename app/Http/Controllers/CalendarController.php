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
        // 'id' => 'reuired',
        // 'time_start' => 'required',
        // 'time_end' => 'required',
        // 'day' => 'required',
        // 'id_class' => 'required',

        $id = Auth::user()->id;
        $user = Auth::user()->tipo;
        if ($user == 2) {
            $calendarSchedules = DB::table('asignaturas')
            ->join('enrollments', 'asignaturas.id_course', '=', 'enrollments.id_course')
            ->join('schedules', 'asignaturas.id_teacher', '=', 'schedules.id_class')
            ->join('users', 'asignaturas.id', '=', 'users.id')
            ->where('enrollments.id_student','=',Auth::user()->id)
            ->select('asignaturas.name', 'schedules.time_start', 'schedules.time_end', 'users.name', 'asignaturas.color' )
            ->get();



            //return view('calendar.index', compact('calendarSchedules'));
            return "$calendarSchedules";
        }
    }
}