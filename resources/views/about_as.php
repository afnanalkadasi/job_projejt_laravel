<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>about</title>
    <script src="https://kit.fontawesome.com/53e9ef6681.js" crossorigin="anonymous"></script>
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link  rel="stylesheet" href="c:/xampp/htdocs/week3/compiny/css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                    <a class="navbar-brand mx-3" href="#">
                            <img src="img/log.png" alt="" width="30" height="24" class="d-inline-block  img-fluid">
                            وظيفتي
                         </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.html">الرئيسية</a>
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
              <button class="btn btn-sm btn-outline-secondary me-auto" type="button"><a href="sign_up.html">إنشاء حساب</a>   </button>           
          <button class="btn btn-sm btn-outline-secondary me-3" type="button"> <a href="login.html">تسجيل الدخول</a> </button>           

          <form class="d-flex me-auto search_he">
            <input class="form-control " id="searchbar" onkeyup="search_ele()" type="search" placeholder="بحث" aria-label="Search">

          </form>
            </div>
            </div>
          </nav>
    </header>
    
    <main>
      
     <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-img my-5">
                        <img src="img/ab.jpg" class="img-fluid" alt="" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-content py-5">
                       
                        <h2>
                           موقع وظيفتي  <br />
                            لعرض فرص العمل
                        </h2>
                        <p>
                            وظيفتي هو من المواقع الإلكترونية المتخصصة في إعلان ونشر جميع الوظائف في اليمن . 
                             تم اطلاق موقع وظيفتي عام 2022، حيث انه يساعد أصحاب العمل، الشركات، وألمنظمات الغير ربحية في اليمن بإضافة العديد من الوظائف 
                             الشاغرة على منصة وظيفتي للوصول الى اكبر شريحة ممكنه وسهولة متابعة الوظائف الجديده.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about-sub">
                                <h6><i class="fa fa-check"></i> اعمال حرة</h6>
                                <h6><i class="fa fa-check"></i> اعمال فنية</h6>
                                <h6><i class="fa fa-check"></i> اعمال يدوية</h6>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-sub">
                                <h6><i class="fa fa-check"></i> اعمال تقنية</h6>
                                <h6><i class="fa fa-check"></i> اون لاين</h6>
                                <h6><i class="fa fa-check"></i> اعمال تصميم</h6>
                            </div>
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
                              <img  src="img/log.png"  class="bi me-2" width="40" height="32"> 
                            </a>
                            <p class="text-muted"> أحد محركات البحث عن الوظائف في المنطقة العربية، يجلب لك عدة وظائف  </p>
                    </div>
            </div>
          </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>