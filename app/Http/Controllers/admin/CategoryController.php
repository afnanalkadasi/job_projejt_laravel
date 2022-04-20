<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function create(){
       
        return view('admin.add_category');
    }

    public function listAll(){
        $categorys=Category::all();
        return view('admin.categories')->with('categories', $categorys);
    }

    public function store(Request $request)
{

        Validator::validate($request->all(),[
            'name' => ['required','max:25'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => ['required','max:355'],
            'is_active' => ['required'],


        ],[
            'name.required' => 'Name of category is required',
            'name.max' => 'Name of category should not be greater than 25 characters.',
            'image.required'=>'image is required',
            'description.required'=>'description is required',
            'description.max'=>'description should not be max  355',

        ]); 



$category=new Category();
$category->name=$request->name;
$category->description=$request->description;
$category->is_active=$request->is_active;
$category->image=$request->hasFile('image')?$this->uploadFile($request->file('image')):"default.png";

if($category->save())
return redirect()->route('categories')
->with(['success'=>'category created successful']);
return back()->with(['error'=>'can not create category']);
}

public function edit($cat_id){
    $category=Category::find($cat_id);
    return view('admin.edit_category')
    ->with('category',$category);
}

public function update(Request $request,$cat_id){
   
$category=Category::find($cat_id);
$category->name=$request->name;
$category->description=$request->description;
$category->is_active=$request->is_active;
if($request->hasFile('image'))
$category->image=$this->uploadFile($request->file('image'));
if($category->save())
return redirect()->route('categories')->with(['success'=>'data updated successful']);
return redirect()->back()->with(['error'=>'can not update data ']);

}

public function toggle($cat_id){
    $cat=Category::find($cat_id);
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
