@extends('layouts.web.user.master')

@section('content')

 <!-- Content -->
        
 <div class="container-xxl flex-grow-1 container-p-y">
            
            
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> اضافة   الدورات</h4>
            
            
            @if ($errors->any())
          @foreach ($errors->all() as $err)
          <p class="alert alert-danger">{{ $err }}</p>
          @endforeach
              
              @endif
            
            <!-- Multi Column with Form Separator -->
            <div class="card mb-4"> 
              <form class="card-body" action="{{ url('user/save_course') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row g-3">
                  <div class="col-md-6">
                    <label class="form-label" for="multicol-username">اسم  الدورة</label>
                    <input name="name" type="text" id="multicol-username" class="form-control" placeholder="" />
                  </div>
                
                  <div class="col-md-6">
                    <label for="exampleFormControlTextarea1" class="form-label">الدرجة </label>
                    <input name="degree" type="text" id="multicol-username" class="form-control" placeholder="" />
                  </div>

                  <div class="col-md-6 col-12 mb-md-0 mb-3 ps-md-0">
                  <label class="form-label" for="multicol-email">  المستخدم</label>
              <select name="user_id" class="form-select item-details mb-2">
                                @foreach($users as $user)
                <option  value ='{{$user->id}}'>{{$user->name}}</option>
                          
                @endforeach
                          
              </select>
                  </div>
                  <div class="col-md-6">
                    <div class="form-password-toggle">
                      <label class="form-label" for="multicol-confirm-password">تفعيل  الدورة</label>
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