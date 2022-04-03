<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>job</title>
    <script src="https://kit.fontawesome.com/53e9ef6681.js" crossorigin="anonymous"></script>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link  rel="stylesheet" href="css/style.css">
</head>
<body>
   <header>
    <nav class="navbar navbar-expand-lg  navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand mx-3" href="#">
               <img src="img/log.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
               وظيفتي
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
         </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">الرئيسية</a>
              </li>
              <li class="nav-item"><a class="nav-link" href="jobs.html"> الوظائف</a> </li>
              <li class="nav-item"><a class="nav-link" href="service.html"> خدماتنا</a></li>
              <li class="nav-item"><a class="nav-link " href="about_as.html"> من نحن</a></li>
              <li class="nav-item"><a class="nav-link " href="company.html">شركاتنا</a></li> 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  حساب المستخدم
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" style="color: black;" href="information1.html">معلومات المستخدم</a></li>
                  <li><a class="dropdown-item" style="color: black;" href="other_users.html"> مستخدمين اخرين</a></li>
                  <li><a class="dropdown-item" style="color: black;" href="#">خروج</a></li>
                </ul>
              </li>  
              <li class="nav-item"><a class="nav-link " href="contact.html">الاتصال بنا</a></li> 
              <li class="nav_item"  id="en"  ><a href="#"class="nav-link "  >English</a></li>
              <li class="nav_item" onclick="togglestyle()" id="ar"  style="display: none;"><a href="#"class="nav-link " >عربي</a></li>
          

            </ul>
            <button class="btn btn-sm btn-outline-secondary me-auto text-cl" type="button"><a href="sign_up.html">إنشاء حساب</a>   </button>           
            <button class="btn btn-sm btn-outline-secondary me-3 text-cl" type="button"> <a href="login.html">تسجيل الدخول</a> </button>           

            <form class="d-flex me-auto search_he">
              <input class="form-control " type="search" placeholder="بحث" aria-label="Search">
            </form>

          </div>
        </div>
      </nav>
</header>
<main>
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
                    <a href="jobs.html" class="btn btn-outline-secondary me-2 ">معلومات اكثر</a>
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
                  <a href="jobs.html" class="btn btn-outline-secondary me-2 ">معلومات اكثر</a>                
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
                <a href="jobs.html" class="btn btn-outline-secondary me-2 ">معلومات اكثر</a>                
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
                <a href="jobs.html" class="btn btn-outline-secondary me-2 ">معلومات اكثر</a>                 
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
                              <img  src="img/log.png"  class="bi me-2" width="40" height="32"> 
                            </a>
                            <p class="text-muted"> أحد محركات البحث عن الوظائف في المنطقة العربية، يجلب لك عدة وظائف  </p>
                    </div>
            </div>
          </div>
        </footer>
    </div>
    
<script src="js/slide.js"></script>
<script src="js/search.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>
</html>