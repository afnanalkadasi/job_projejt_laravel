@extends('layouts.web.master')

@section('title') Jobs @endsection

@section('content')
        <section class="section1 ">
            <div class=" text-secondary px-4 py-5 text-center" style="background-color:#272162; opacity: .9;">
                <div class="py-5">
                  <h1 class="display-5 py-5 fw-bold text-white">وظائفنا</h1>
                  
                  </div>
                </div>
              </div>
          </section>
<section class="section_job">
  <div class=" row-cols-md-6 cols-sm-4 d-flex g-4 row-80 " >
       <div class="col  " >
            <select id="filter-company" class="filter form-select   p-2  mb-2 " >
                <option value="0">...</option>
                <option value="Yemen"> يمن موبايل</option>
                <option value="hail">هائل سعيد</option>
                <option value="online">    أون لاين</option>
          </select> 
        </div>        
     
        <div class="col mx-3" >
    <select id="filter-city" class="filter form-select  p-2 mb-2" >
        <option value="0">... </option>
    <option value="Sana">صنعاء </option>
    <option value="alhwdeda"> الحديدة</option>
    <option value="all">جميع المدن </option>
  </select>  
    </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4  row-80">
        <div class="col job_card" >
          <div class="card h-100 ">
              <div class="card-body">
                <h5 class="card-title  company"  data-company="Yemen">
                 <img src="img/log.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                 شركة يمن موبايل</h5>
                    <p class="card-text">مستشفى الحكمة يعلن وظيفة إدارية شاغرة في مجال الأجور والرواتب</p>

                <span><i class="fa fa-map-marker" style="width:20px;" aria-hidden="true"></i>
                    <span class="city" data-city="Sana">صنعاء</span>
                </span>
                <br>
                <a><i class="far fa-calendar-times" style="width:20px;" aria-hidden="true"></i>
                  <a > تاريخ الانتهاء : 2022-01-16
                  </a>
                  </a>
                <br>
                <div class="row modal-footer " style="border:none; ">
                 <a href="/details_job" style="text-decoration: none;">
                  <button class="btn btn-colo-b btn-small btn-block  mx-auto">
                      معلومات اكثر </button></a>
                   </div>                  
                </div>
            </div>
          </div>

        <div class="col job_card">
          <div class="card h-100 ">
            <div class="card-body">
              <h5 class="card-title company"  data-company="hail">
               <img src="img/log.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                  شركة هائل سعيد</h5>
              <p class="card-text"> مطلوب محاسب عام</p>

              <span><i class="fa fa-map-marker" style="width:20px;" aria-hidden="true"></i>
                  <span class="city" data-city="alhwdeda">الحديدة</span>
              </span>
              <br>
              <a><i class="far fa-calendar-times" style="width:20px;" aria-hidden="true"></i>
                <a > تاريخ الانتهاء : 2022-01-16
                </a>
                </a>             
              <div class="row modal-footer " style="border:none; ">
               <a href="/details_job" style="text-decoration: none;">
                <button class="btn btn-colo-b btn-small btn-block  mx-auto">
                    معلومات اكثر </button></a>
                 </div>                  
              </div>
          </div>
        </div>
            <div class="col job_card" >
              <div class="card h-100 ">
                  <div class="card-body">
                    <h5 class="card-title company"  data-company="online">
                     <img src="img/log.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                     أون لاين</h5>
                   <p class="card-text"> نيوم تعلن وظائف متنوعة للجنسين حملة الثانوية فأعلى برواتب تصل إلى 9000     </p>
                    <span><i class="fa fa-map-marker" style="width:20px;" aria-hidden="true"></i>
                        <span class="city" data-city="all">جميع المدن</span>
                    </span>
                    <br>
                   
                    <a><i class="far fa-calendar-times" style="width:20px;" aria-hidden="true"></i>
                      <a > تاريخ الانتهاء : 2022-01-16
                      </a>
                      </a>
                    <div class="row modal-footer " style="border:none; ">
                     <a href="/details_job" style="text-decoration: none;">
                      <button class="btn btn-colo-b btn-small btn-block  mx-auto">
                          معلومات اكثر </button></a>
                       </div>                  
                    </div>
                </div>
     </div>
  


<div class="col job_card" >
          <div class="card h-100 ">
              <div class="card-body">
                <h5 class="card-title company"  data-company="online">
                 <img src="img/log.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                 أون لاين</h5>
               <p class="card-text"> نيوم تعلن وظائف متنوعة للجنسين حملة الثانوية فأعلى برواتب تصل إلى 9000     </p>
                <span><i class="fa fa-map-marker" style="width:20px;" aria-hidden="true"></i>
                    <span class="city" data-city="all">جميع المدن</span>
                </span>
                <br>
                <a><i class="far fa-calendar-times" style="width:20px;" aria-hidden="true"></i>
                  <a > تاريخ الانتهاء : 2022-01-16
                  </a>
                  </a>
                <div class="row modal-footer " style="border:none; ">
                 <a href="#" style="text-decoration: none;">
                  <button class="btn btn-colo-b btn-small btn-block  mx-auto">
                      معلومات اكثر </button></a>
                   </div>                  
                </div>
            </div>
 </div>
 <div class="col job_card">
  <div class="card h-100 ">
    <div class="card-body">
      <h5 class="card-title company"  data-company="hail">
       <img src="img/log.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
          شركة هائل سعيد</h5>
      <p class="card-text"> مطلوب محاسب عام</p>

      <span><i class="fa fa-map-marker" style="width:20px;" aria-hidden="true"></i>
        <span class="city" data-city="all">جميع المدن</span>
    </span>
    <br>
    <a><i class="far fa-calendar-times" style="width:20px;" aria-hidden="true"></i>
      <a > تاريخ الانتهاء : 2022-01-16
      </a>
      </a>
      <div class="row modal-footer " style="border:none; ">
       <a href="/details_job" style="text-decoration: none;">
        <button class="btn btn-colo-b btn-small btn-block  mx-auto">
            معلومات اكثر </button></a>
         </div>                  
      </div>
  </div>
</div>
<div class="col job_card">
  <div class="card h-100 ">
    <div class="card-body">
      <h5 class="card-title company"  data-company="hail">
       <img src="img/log.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
          شركة هائل سعيد</h5>
      <p class="card-text"> مطلوب محاسب عام</p>

      <span><i class="fa fa-map-marker" style="width:20px;" aria-hidden="true"></i>
        <span class="city" data-city="Sana">صنعاء</span>
    </span>
    <br>
    <a><i class="far fa-calendar-times" style="width:20px;" aria-hidden="true"></i>
      <a > تاريخ الانتهاء : 2022-01-16
      </a>
      </a>
      <div class="row modal-footer " style="border:none; ">
       <a href="/details_job" style="text-decoration: none;">
        <button class="btn btn-colo-b btn-small btn-block  mx-auto">
            معلومات اكثر </button></a>
         </div>                  
      </div>
  </div>
</div> 

</div>
</section>
@endsection

</body>
</html>