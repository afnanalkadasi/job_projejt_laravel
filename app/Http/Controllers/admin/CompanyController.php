<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Validator; 

class CompanyController extends Controller
{
    public function create(){
       
        return view('admin.add_company');
    }

    public function listAll(){
        $companys=Company::all();
        return view('admin.companies')->with('companies', $companys);
    }

    public function store(Request $request)
{

        Validator::validate($request->all(),[
            'name' => ['required','max:25'],
            'place' => ['required','max:35'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => ['required','max:355'],
            'is_active' => ['required'],


        ],[
            'name.required' => 'Name of company is required',
            'name.max' => 'Name of company should not be greater than 25 characters.',
            'place.required' => 'place of company is required',
            'place.max' => 'place of company should not be greater than 35 characters.',
            'image.required'=>'image is required',
            'description.required'=>'description is required',
            'description.max'=>'description should not be max  355',

        ]); 



$company=new Company();
$company->name=$request->name;
$company->place=$request->place;
$company->description=$request->description;
$company->is_active=$request->is_active;
$company->image=$request->hasFile('image')?$this->uploadFile($request->file('image')):"default.png";

if($company->save())
return redirect()->route('companies')
->with(['success'=>'company created successful']);
return back()->with(['error'=>'can not create company']);
}

public function edit($company_id){
    $company=Company::find($company_id);
    return view('admin.edit_company')
    ->with('company',$company);
}

public function update(Request $request,$company_id){
   
$company=Company::find($company_id);
$company->name=$request->name;
$company->place=$request->place;
$company->description=$request->description;
$company->is_active=$request->is_active;
if($request->hasFile('image'))
$company->image=$this->uploadFile($request->file('image'));
if($company->save())
return redirect()->route('companies')->with(['success'=>'data updated successful']);
return redirect()->back()->with(['error'=>'can not update data ']);

}

public function toggle($company_id){
    $company=Company::find($company_id);
    $company->is_active*=-1;
    if($company->save())
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
