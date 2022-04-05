
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
                  <a class="nav-link active" aria-current="page" href="{{ route('index') }}">الرئيسية</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('job') }}" > الوظائف</a> </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('service') }}"> خدماتنا</a></li>
                <li class="nav-item"><a class="nav-link " href="{{ route('about_as') }}"> من نحن</a></li>
                <li class="nav-item"><a class="nav-link " href="{{ route('company') }}">شركاتنا</a></li> 
<!--   
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    حساب المستخدم
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" style="color: black;" href="{{ route('information1') }}">معلومات المستخدم</a></li>
                    <li><a class="dropdown-item" style="color: black;" href="{{ route('other_users') }}"> مستخدمين اخرين</a></li>
                        <li><a class="dropdown-item" style="color: black;" href="#">خروج</a></li>
                      </ul>
                </li>  -->
                <li class="nav-item"><a class="nav-link " href="{{ route('contact') }}">الاتصال بنا</a></li> 
                <li class="nav_item"  id="en"  ><a href="#"class="nav-link "  >English</a></li>
                <li class="nav_item" onclick="togglestyle()" id="ar"  style="display: none;"><a href="#"class="nav-link " >عربي</a></li>
            
              </ul>
              <button class="btn btn-sm btn-outline-secondary me-auto" type="button"style="width: 80px;" ><a href="{{ route('sign_up') }}">إنشاء حساب</a>   </button>           
          <button class="btn btn-sm btn-outline-secondary me-3" type="button" style="width: 80px;"> <a href="{{ route('login') }}">تسجيل الدخول</a> </button>           

          <form class="d-flex me-auto search_he"  style="margin: 0 0 0 15px  ;">
            <input class="form-control " id="searchbar" onkeyup="search_ele()" type="search" placeholder="بحث" aria-label="Search">

          </form>
            </div>
            </div>
          </nav>
    