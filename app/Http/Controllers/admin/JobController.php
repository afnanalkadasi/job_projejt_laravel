<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Company;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class JobController extends Controller
{
    public function create(){
        $companies=Company::all();
        $categories=Category::all();
        return view('admin.add_job')->with(['categories' =>$categories , 'companies'=>$companies ]);
    }

    public function listAll(){
        $jobs=Job::all();
        return view('admin.jobs')->with('jobs', $jobs);
    }

    public function store(Request $request)
{

        Validator::validate($request->all(),[
            'name' => ['required','max:25'],
            'place' => ['required'],
            'salary' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => ['required','max:355'],
            'is_active' => ['required'],


        ],[
            'name.required' => 'Name of job is required',
            'name.max' => 'Name of job should not be greater than 25 characters.',
            'place.required' => 'place of job is required',
            'salary.required' => 'salary of job is required',
            'start_date.required' => 'start_date of job is required',
            'end_date.required' => 'end_date of job is required',
            'image.required'=>'image is required',
            'description.required'=>'description is required',
            'description.max'=>'description should not be max  355',

        ]); 



$job=new Job();
$job->name=$request->name;
$job->place=$request->place;
$job->salary=$request->salary;
$job->start_date=$request->start_date;
$job->end_date=$request->end_date;
$job->category_id=$request->category_id;
$job->company_id=$request->company_id;
$job->description=$request->description;
$job->is_active=$request->is_active;
$job->image=$request->hasFile('image')?$this->uploadFile($request->file('image')):"default.png";

if($job->save())
return redirect()->route('jobs')
->with(['success'=>'job created successful']);
return back()->with(['error'=>'can not create job']);
}

public function edit($job_id){
    $job=Job::find($job_id);
    $companies=Company::all();
    $categories=Category::all();
   
    return view('admin.edit_job')
    ->with(['categories' =>$categories , 'companies'=>$companies , 'job'=> $job ]);
}

public function update(Request $request,$job_id){
   
$job=Job::find($job_id);
$job->name=$request->name;
$job->place=$request->place;
$job->salary=$request->salary;
$job->start_date=$request->start_date;
$job->end_date=$request->end_date;
$job->category_id=$request->category_id;
$job->company_id=$request->company_id;
$job->description=$request->description;
$job->is_active=$request->is_active;
if($request->hasFile('image'))
$job->image=$this->uploadFile($request->file('image'));
if($job->save())
return redirect()->route('jobs')->with(['success'=>'data updated successful']);
return redirect()->back()->with(['error'=>'can not update data ']);

}

public function toggle($job_id){
    $cat=Job::find($job_id);
    $cat->is_active*=-1;
    if($cat->save())
    return back()->with(['success'=>'data updated successful']);
    return back()->with(['error'=>'can not update data']);

}
public function uploadFile($file){
$dest=public_path()."/img/";

//$file = $request->file('image');
$filename= time()."_".$file->getClientOriginalName();
$file->move($dest,$filename);
return $filename;


}
}
