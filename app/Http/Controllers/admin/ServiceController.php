<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Validator; 

class ServiceController extends Controller
{
    public function create(){
       
        return view('admin.add_service');
    }

    public function listAll(){
        $services=Service::all();
        return view('admin.services')->with('services', $services);
    }

    public function store(Request $request)
{

        Validator::validate($request->all(),[
            'name' => ['required','max:25'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => ['required','max:355'],
            'is_active' => ['required'],


        ],[
            'name.required' => 'Name of service is required',
            'name.max' => 'Name of service should not be greater than 25 characters.',
            'image.required'=>'image is required',
            'description.required'=>'description is required',
            'description.max'=>'description should not be max  355',

        ]); 



$service=new Service();
$service->name=$request->name;
$service->description=$request->description;
$service->is_active=$request->is_active;
$service->image=$request->hasFile('image')?$this->uploadFile($request->file('image')):"default.png";

if($service->save())
return redirect()->route('services')
->with(['success'=>'service created successful']);
return back()->with(['error'=>'can not create service']);
}

public function edit($service_id){
    $service=Service::find($service_id);
    return view('admin.edit_service')
    ->with('service',$service);
}

public function update(Request $request,$service_id){
   
$service=Service::find($service_id);
$service->name=$request->name;
$service->description=$request->description;
$service->is_active=$request->is_active;
if($request->hasFile('image'))
$service->image=$this->uploadFile($request->file('image'));
if($service->save())
return redirect()->route('services')->with(['success'=>'data updated successful']);
return redirect()->back()->with(['error'=>'can not update data ']);

}

public function toggle($service_id){
    $service=Service::find($service_id);
    $service->is_active*=-1;
    if($service->save())
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
