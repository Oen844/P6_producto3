<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;

use App\Http\Requests\StoreCourses;

class CoursesController extends Controller
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

    public function index(){
        $courses = Courses::orderBy('id','desc')->paginate();



        return view('courses.index', compact('courses'));
    }

    public function create(){
        return view('courses.create');
    }

    public function store(Request $request){
        $course = new Courses();

        $request->validate([
            'name'=>'required|max:50',
            'description'=>'required|max:255',
            'date_start'=>'required',
            'date_end'=>'required',
            'active'=>'required|max:1'
        ]);

        $course ->name = $request->name;
        $course ->description = $request->description;
        $course ->date_start = $request->date_start;
        $course ->date_end = $request->date_end;
        $course ->active = $request->active;

         $course->save();




         return redirect()->route('courses.show',$course);


     }

     public function show(Courses $course){



        return view('courses.show',['course' => $course]);
    }


    public function edit(Courses $course){
        return view('courses.edit',compact('course'));
    }

    public function update(Request $request, Courses $course){


        $course ->name = $request->name;
        $course ->description = $request->description;
        $course ->date_start = $request->date_start;
        $course ->date_end = $request->date_end;
        $course ->active = $request->active;


         $course->save();

         return redirect()->route('courses.show',$course);

    }

    public function destroy(Courses $course){
        $course->delete();

        return redirect()->route('courses.index');

    }

}
