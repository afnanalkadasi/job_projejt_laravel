@extends('layouts.web.admin.master')

@section('content')

 <!-- Content -->
        
 <div class="container-xxl flex-grow-1 container-p-y">
            
            
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> تعديل الشركة </h4>
            
            
            @if ($errors->any())
          @foreach ($errors->all() as $err)
          <p class="alert alert-danger">{{ $err }}</p>
          @endforeach
              
              @endif
            
            
            <!-- Multi Column with Form Separator -->
            <div class="card mb-4">
              <form class="card-body" action="{{ route('update_company',$company->id) }}" method="POST" enctype="multipart/form-data">
              @csrf  
              <div class="row g-3">
                  <div class="col-md-6">
                    <label class="form-label" for="multicol-username">اسم الشركة</label>
                    <input name="name" type="text" value="{{ $company->name }}" id="multicol-username" class="form-control" placeholder="" />
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="multicol-username">موقع الشركة</label>
                    <input name="place" type="text" value="{{ $company->place }}" id="multicol-username" class="form-control" placeholder="" />
                  </div>
                  <div class="col-md-6">
                    <label class="form-label" for="multicol-email">الصورة </label>
                    <div class="input-group input-group-merge">
                      <input  name="image" type="file"  class="form-control"  aria-describedby="multicol-email2" />
                      
                    </div>
                  </div>
                  <div>
          <label for="exampleFormControlTextarea1" class="form-label">الوصف</label>
          <textarea name="description" class="form-control" value="{{ $company->description }}" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

                  <div class="col-md-6">
                    <div class="form-password-toggle">
                      <label class="form-label" for="multicol-confirm-password">تفعيل الشركة</label>
                      <div class="input-group input-group-merge">
                      <label class="switch">
                          <input name="is_active" value=1 type="checkbox" checked class="switch-input" />
                          <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                          </span>
                          <span class="switch-label">مفعل</span>
                      </label>
                      </div>
                    </div>
                  </div>
                </div>
                
                
                
                
                <div class="pt-4">
                  <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                  <button type="reset" class="btn btn-label-secondary">Cancel</button>
                </div>
              </form>
            </div>
            
            
@endsection