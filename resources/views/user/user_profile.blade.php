@extends('layouts.web.admin.master')

@section('content')

 <!-- Content -->
        
 <div class="card mb-4">
      <div class="card-body">
        <div class="user-avatar-section">
          <div class=" d-flex align-items-center flex-column">
            <img class="img-fluid rounded my-4" src="../../assets/img/avatars/10.png" height="110" width="110" alt="User avatar" />
            <div class="user-info text-center">
              <h4 class="mb-2">Violet Mendoza</h4>
              
            </div>
          </div>
        </div>
    
        <h5 class="pb-2 border-bottom mb-4">تفاصيل المستخدم</h5>
        <div class="info-container">
          <ul class="list-unstyled">
            <li class="mb-3">
              <span class="fw-bold me-2">أسم المستخدم:</span>
              <span>violet.dev</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">الايميل</span>
              <span>vafgot@vultukir.org</span>
            </li>
            
            <li class="mb-3">
              <span class="fw-bold me-2">:الصلاحية</span>
              <span>Author</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">الحالة:</span>
              <span class="badge bg-label-success">Active</span>
            </li>
            
            <li class="mb-3">
              <span class="fw-bold me-2">Contact:</span>
              <span>(123) 456-7890</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Languages:</span>
              <span>French</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Country:</span>
              <span>England</span>
            </li>
          </ul>
          <div class="d-flex justify-content-center pt-3">
            <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>
          </div>
        </div>
      </div>
    </div>
            
            
@endsection