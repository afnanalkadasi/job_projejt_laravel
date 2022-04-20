<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class ExperienceController extends Controller
{
    public function create(){
        $users=User::all();
        return view('user.add_experience')->with('users',$users);;
    }
    
    public function listAll(){
        $experiences=Experience::all();
        return view('user.experiences')->with('experiences', $experiences);
    }

    public function store(Request $request)
{

   Validator::validate($request->all(),[
    'job_title' => ['required','max:55'],
    'career_field' => ['required','max:35'],
    'start_date' => ['required','date'],
    'end_date' => ['required','date'],
    'company_name' => ['required','max:35'],
    'is_active' => ['required'],



],[
    'job_title.required' => 'job_title of experience is required',
    'job_title.max' => 'job_title of experience should not be greater than 255 characters.',
    'career_field.required'=>'career_field is required',
    'career_field.max'=>'career_field should not be max  35',
    'start_date.required'=>'start_date is required',
    'start_date.date'=>'start_date should  be date',
    'end_date.required'=>'end_date is required',
    'end_date.date'=>'end_date should  be date',
    'company_name.required'=>'company_name is required',
    'company_name.max'=>'company_name should not be max  35',

]); 

$experience=new Experience();
$experience->job_title=$request->job_title;
$experience->career_field=$request->career_field;
$experience->start_date=$request->start_date;
$experience->end_date=$request->end_date;
$experience->company_name=$request->company_name;
$experience->user_id=$request->user_id;
$experience->is_active=$request->is_active;

if($experience->save())
return redirect()->route('experiences')
->with(['success'=>'experience created successful']);
return back()->with(['error'=>'can not create experience']);
}
public function edit($experience_id){
    $experience=experience::find($experience_id);
 
    $users=User::all();

    return view('user.edit_experience')->with(['experience' =>$experience , 'users'=>$users ]);
}

public function update(Request $request,$experience_id){
   
$experience=experience::find($experience_id);
$experience->job_title=$request->job_title;
$experience->career_field=$request->career_field;
$experience->start_date=$request->start_date;
$experience->end_date=$request->end_date;
$experience->company_name=$request->company_name;
$experience->user_id=$request->user_id;
$experience->is_active=$request->is_active;

if($experience->save())
return redirect()->route('experiences')->with(['success'=>'data updated successful']);
return redirect()->back()->with(['error'=>'can not update data ']);

}

public function toggle($experience_id){
    $experience=experience::find($experience_id);
    $experience->is_active*=-1;
    if($experience->save())
    return back()->with(['success'=>'data updated successful']);
    return back()->with(['error'=>'can not update data']);

}
}
