<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class EducationController extends Controller
{
    public function create(){
        $users=User::all();
        return view('user.add_education')->with('users',$users);
    }

    public function listAll(){
        $educations=Education::all();
        return view('user.educations')->with('educations', $educations);
    }

    public function store(Request $request)
{

   Validator::validate($request->all(),[
    'name' => ['required','max:35'],
    'avrage' => ['required'],
    'year' => ['required'],
    'is_active' => ['required'],


],[
    'name.required' => 'Name of education is required',
    'name.max' => 'Name of education should not be greater than 35 characters.',
    'avrage.required'=>'avrage is required',
    'year.required'=>'year is required',

]); 

$edu=new Education();
$edu->name=$request->name;
$edu->avrage=$request->avrage;
$edu->year=$request->year;
$edu->user_id=$request->user_id;
$edu->is_active=$request->is_active;


if($edu->save())
return redirect()->route('educations')
->with(['success'=>'education created successful']);
return back()->with(['error'=>'can not create education']);
}
public function edit($education_id){
    $education=Education::find($education_id);
 
    $users=User::all();

    return view('user.edit_education')->with(['education' =>$education , 'users'=>$users ]);
}

public function update(Request $request,$education_id){
   
$education=Education::find($education_id);
$education->name=$request->name;
$education->avrage=$request->avrage;
$education->year=$request->year;
$education->user_id=$request->user_id;
$education->is_active=$request->is_active;

if($education->save())
return redirect()->route('educations')->with(['success'=>'data updated successful']);
return redirect()->back()->with(['error'=>'can not update data ']);

}

public function toggle($education_id){
    $education=education::find($education_id);
    $education->is_active*=-1;
    if($education->save())
    return back()->with(['success'=>'data updated successful']);
    return back()->with(['error'=>'can not update data']);

}
}
