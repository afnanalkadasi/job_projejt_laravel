@extends('layouts.web.user.master')

@section('content')

       <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">


<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> عرض المؤهلات الدراسية</h4>




<!-- Multi Column with Form Separator -->
<!-- Bordered Table -->
<div class="card">
<div class="card-body">
<div class="table-responsive text-nowrap">
<table class="table table-bordered">
<thead>
<tr>
<th>#</th>
<th>اسم المؤهل الدراسي</th>
<th>المعدل</th>
<th>السنة</th>
<th>المستخدم</th>
<th>الحالة</th>
<th>العمليات</th>
</tr>
</thead>
<tbody>
@foreach($educations as $education)

<tr>
<td>{{$loop->iteration}}</td>
<td>{{$education->name}}</td>
<td>{{$education->avrage}}</td>
<td>{{$education->year}}</td>
<td>{{$education->user_id}}</td>
<td>
@if($education->is_active == 1) 
<span class="badge bg-label-success me-1">مفعل</span>
@else
 <span class="badge bg-label-danger me-1">غير مفعل</span>
@endif
</td>
<td>
<div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('edit_education',$education->id) }}"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                <a class="dropdown-item" href="{{ route('toggle_education',$education->id) }}"><i class="bx bx-trash me-2"></i> @if($education->is_active==1)disable @else enable @endif</a>
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