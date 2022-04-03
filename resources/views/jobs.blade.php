<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jobs</title>
    <script src="https://kit.fontawesome.com/53e9ef6681.js" crossorigin="anonymous"></script>
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link  rel="stylesheet" href="../assets/css/style.css">
    </head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand mx-3" href="#">
                <img src="../assets/img/log.png" alt="" width="30" height="24" class="d-inline-block  img-fluid">
                وظيفتي
             </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/index">الرئيسية</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="/jobs"> الوظائف</a> </li>
            <li class="nav-item"><a class="nav-link" href="/service"> خدماتنا</a></li>
            <li class="nav-item"><a class="nav-link " href="/about_as"> من نحن</a></li>
            <li class="nav-item"><a class="nav-link " href="/company">شركاتنا</a></li> 

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                حساب المستخدم
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" style="color: black;" href="/information1">معلومات المستخدم</a></li>
                <li><a class="dropdown-item" style="color: black;" href="/other_users"> مستخدمين اخرين</a></li>
                    <li><a class="dropdown-item" style="color: black;" href="#">خروج</a></li>
                  </ul>
            </li> 
            <li class="nav-item"><a class="nav-link " href="/contact">الاتصال بنا</a></li> 
            <li class="nav_item"  id="en"  ><a href="#"class="nav-link "  >English</a></li>
            <li class="nav_item" onclick="togglestyle()" id="ar"  style="display: none;"><a href="#"class="nav-link " >عربي</a></li>
        
          </ul>
          <button class="btn btn-sm btn-outline-secondary me-auto" type="button"><a href="/sign_up">إنشاء حساب</a>   </button>           
      <button class="btn btn-sm btn-outline-secondary me-3" type="button"> <a href="/login">تسجيل الدخول</a> </button>           

      <form class="d-flex me-auto search_he">
        <input class="form-control " id="searchbar" onkeyup="search_ele()" type="search" placeholder="بحث" aria-label="Search">

      </form>
        </div>
        </div>
      </nav>
</header>
    <main>
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
                 <img src="../assets/img/log.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
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
               <img src="../assets/img/log.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
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
                     <img src="../assets/img/log.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
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
                 <img src="../assets/img/log.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
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
       <img src="../assets/img/log.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
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
       <img src="../assets/img/log.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
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
    </main>
    <div class="container  ">
      <footer class="py-5    border-top">

        <div class="row row-cols-xs-1 row-cols-md-2 row-cols-lg-4 mx-auto g-4 row-80">
          <div class="">
            <h5>الروابط السريعة</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">الرئيسية</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">وظائفنا</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">خدماتنا</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">من نحن</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">تواصل معنا</a></li>
            </ul>
          </div>
    
          <div class="">
            <h5>خدماتنا</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">إنشاء حساب مجاني</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">نشر سيرتك الذاتية</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">توفير لك العديد من الوظائف</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">خدمة4</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">خدمة5</a></li>
            </ul>
          </div>
    
          <div class="">
            <h5>الوظائف حسب المدينة</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">وظائف تعز</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">وظائف صنعاء</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">وظائف حضرموت</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">وظائف إب</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">وظائف مارب</a></li>
            </ul>
          </div>
          
          <div class=" ">
                  <div class="col">
                          <a href="" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                            <img  src="../assets/img/log.png"  class="bi me-2" width="40" height="32"> 
                          </a>
                          <p class="text-muted"> أحد محركات البحث عن الوظائف في المنطقة العربية، يجلب لك عدة وظائف  </p>
                  </div>
          </div>
        </div>
      </footer>
  </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../assets/js/search.js"></script>
</body>
</html>