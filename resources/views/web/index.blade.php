@extends('layouts.web.master')

@section('title') Home @endsection

@section('content')

<section class="section1 ">
  <div id="carouselExampleDark" class="carousel slid_hi carousel-dark slide " data-bs-ride="carousel">
   
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
   

    <div class="carousel-inner">
      
      <div class="carousel-item slid_hi  active" data-bs-interval="10000">
        <img src="img/head1.png" class="d-block img-fluid w-100" alt="...">
        <div class="carousel-caption  d-none d-md-block">
          <h1>وظائف في اليمن</h1>
        </div>
      </div>
      <div class="carousel-item slid_hi">
        <img src="img/head3.png" class="d-block img-fluid  w-100" alt="...">
        <div class="carousel-caption  d-none d-md-block">
                <h1>تبحث عن وظائف</h1>
        </div>
      </div>
      <div class="carousel-item slid_hi">
            <img src="img/head4.png" class="d-block img-fluid w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                    <h1>ارسل ملفك لنا</h1>
            </div>
          </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<section class="section2">
    <div id="robotcarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
          <img class=" w-100 " src="img/ads2.gif" alt="">
        </div>
        <div class="carousel-item">
            <img class=" w-100" src="img/ads3.gif" alt="">
          </div>
          <div class="carousel-item">
              <img class="w-100" src="img/ads4.gif" alt="">
            </div>
      </div>
      
      <button class="carousel-control-prev"  type="button" data-bs-target="#robotcarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#robotcarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      
    </div>
</section>

<section class="section3">
    <h2>اخر الوظائف </h2>
    <div class="row row-cols-1 row-cols-md-2 g-4  row-80 ">
        <div class="col " > 
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
                    <span><i class="far fa-calendar-times" style="width:20px;" aria-hidden="true"></i>
                      <span > تاريخ الانتهاء : 2022-01-16
                        </span>
                  </span>
                  <br> <br>
                    <a href="/jobs" class="btn btn-outline-secondary me-2 ">معلومات اكثر</a>
            </div>
          </div>
        </div>
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
                  <span><i class="far fa-calendar-times" style="width:20px;" aria-hidden="true"></i>
                    <span > تاريخ الانتهاء : 2022-01-16
                      </span>
                </span>
                  <br> <br>
                  <a href="/jobs" class="btn btn-outline-secondary me-2 ">معلومات اكثر</a>                
                  </div>
              </div>
            </div>
  
  
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
                <span><i class="far fa-calendar-times" style="width:20px;" aria-hidden="true"></i>
                  <span > تاريخ الانتهاء : 2022-01-16
                    </span>
              </span>
                <br> <br>
                <a href="/jobs" class="btn btn-outline-secondary me-2 ">معلومات اكثر</a>                
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
                  <span><i class="far fa-calendar-times" style="width:20px;" aria-hidden="true"></i>
                    <span > تاريخ الانتهاء : 2022-01-16
                      </span>
                </span>
                <br> <br>
                <a href="/jobs" class="btn btn-outline-secondary me-2 ">معلومات اكثر</a>                 
                  </div>
              </div>
   </div>
   
      </div>
</section>

<section class="section4 row-80">
    <h2>الشركات للعمل بها </h2>
    <div id="container_im">
        <div id="slider-container_im">
          <span onclick="slideRight()" class="btn_im"></span>
            <div id="slider">
              <div class="slide_im"><img src="img/comp1.png"></div>
              <div class="slide_im"><img src="img/comp2.png"></div>
              <div class="slide_im"><img src="img/comp3.png"></div>
              <div class="slide_im"><img src="img/comp4.png"></div>
              <div class="slide_im"><img src="img/comp1.png"></div>
              <div class="slide_im"><img src="img/comp2.png"></div>
              <div class="slide_im"><img src="img/comp3.png"></div>
              <div class="slide_im"><img src="img/comp4.png"></div>
              <div class="slide_im"><img src="img/comp1.png"></div>
              <div class="slide_im"><img src="img/comp2.png"></div>
             
          </div>
          <span onclick="slideLeft()" class="btn_im"></span>
        </div>
      </div>
      
</section>

@endsection
</body>
</html>