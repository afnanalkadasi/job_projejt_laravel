@extends('layouts.web.admin.master')

@section('content')

       <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">


<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> عرض الاقسام</h4>




<!-- Multi Column with Form Separator -->
<!-- Bordered Table -->
<div class="card">
<div class="card-body">
<div class="table-responsive text-nowrap">
<table class="table table-bordered">
<thead>
<tr>
<th>اسم الشركة</th>
<th>موقع الشركة</th>
<th>الصورة</th>
<th>الوصف</th>


<th>الحالة</th>
<th>العمليات</th>
</tr>
</thead>
<tbody>
@foreach($companies as $company)

<tr>
<td>{{$loop->iteration}}</td>
<td>{{$company->name}}</td>
<td>{{$company->place}}</td>

<td> <ul class="list-unstyled companys-list m-0 avatar-group d-flex align-items-center">
              
              <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                <img src="{{ $company->image }}" alt="Avatar" class="rounded-circle">
              </li>
            </ul>
        </td>
<td>{{$company->description}}</td>

<td>
@if($company->is_active == 1) 
<span class="badge bg-label-success me-1">مفعل</span>
@else
 <span class="badge bg-label-danger me-1">غير مفعل</span>
@endif
</td>
<td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('edit_company',$company->id) }}"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                <a class="dropdown-item" href="{{ route('toggle_company',$company->id) }}"><i class="bx bx-trash me-2"></i> @if($company->is_active==1)disable @else enable @endif</a>
              </div>
            </div>
</td>
</tr>

@endforeach

</tbody>
</table>
</div>
</div>
</div>
<!--/ Bordered Table -->
            
            
@endsection