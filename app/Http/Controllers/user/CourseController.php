<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    public function create(){
        $users=User::all();
        return view('user.add_course')->with('users',$users);
    }

    public function listAll(){
        $courses=course::all();
        return view('user.courses')->with('courses', $courses);
    }

    public function store(Request $request)
{

   Validator::validate($request->all(),[
    'name' => ['required','max:55'],
    'degree' => ['required'],
    'is_active' => ['required'],


],[
    'name.required' => 'Name of course is required',
    'name.max' => 'Name of course should not be greater than 255 characters.',
    'degree.required'=>'degree is required',

]); 

$course=new course();
$course->name=$request->name;
$course->degree=$request->degree;
$course->user_id=$request->user_id;
$course->is_active=$request->is_active;


if($course->save())
return redirect()->route('courses')
->with(['success'=>'course created successful']);
return back()->with(['error'=>'can not create course']);
}
public function edit($course_id){
    $course=Course::find($course_id);
 
    $users=User::all();

    return view('user.edit_course')->with(['course' =>$course , 'users'=>$users ]);
}

public function update(Request $request,$course_id){
   
$course=course::find($course_id);
$course->name=$request->name;
$course->degree=$request->degree;
$course->user_id=$request->user_id;
$course->is_active=$request->is_active;

if($course->save())
return redirect()->route('courses')->with(['success'=>'data updated successful']);
return redirect()->back()->with(['error'=>'can not update data ']);

}

public function toggle($course_id){
    $course=course::find($course_id);
    $course->is_active*=-1;
    if($course->save())
    return back()->with(['success'=>'data updated successful']);
    return back()->with(['error'=>'can not update data']);

}
}
