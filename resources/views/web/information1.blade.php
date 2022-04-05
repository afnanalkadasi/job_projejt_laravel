<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>information</title>
    <script src="https://kit.fontawesome.com/53e9ef6681.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link  rel="stylesheet" href="css/info_style.css">
</head>
<body>

    <div class="container-fluid">
       
        <div class="row flex-nowrap">

            <div class="col-auto col-md-3 col-xl-2  px-0 " style="background-color: #272162;">
               
                <div class="d-flex flex-column align-items-center align-items-sm-start   text-white min-vh-100">
                    <a href="/index"> 
                      <i class="fas fa-home me-3" style="color: white; font-size: 28px;"></i>
                      </a>
                    <a href="#" class="d-flex align-items-center py-1 px-4 me-md-auto text-white text-decoration-none">
                        <h1>أفنان</h1>
                    </a>
                    <a href="#" >
                        <img src="img/im2.png" alt="hugenerd" width="230" height="230" class="im_size">
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu" role="tablist">
                      <li class="nav-item"  role="presentation">
                            <a href="#" class="nav-link align-middle px-0 "   id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                <i class="fas fa-user" style="color: white; font-size: 18px; margin-left: 10px;"></i> <span class="ms-1 d-none d-sm-inline">البيانات الشخصية</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                                </li>
                            </ul>
                        </li> -->
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link px-0 align-middle" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                <i class="fas fa-book-reader" style="color: white; font-size: 18px; margin-left: 10px;"></i><span class="ms-1 d-none d-sm-inline">الخبرات</span></a>
                        </li>
                        <li class="nav-item"  role="presentation">
                            <a href="#" class="nav-link px-0 align-middle"  id="skill-tab" data-bs-toggle="tab" data-bs-target="#skill" type="button" role="tab" aria-controls="skill" aria-selected="false">
                                <i class="fas fa-book-reader" style="color: white; font-size: 18px; margin-left: 10px;"></i> <span class="ms-1 d-none d-sm-inline">المهارات</span></a>
                        </li>
                  
                        <li class="nav-item"  role="presentation">
                            <a href="#" class="nav-link px-0 align-middle"  id="study-tab" data-bs-toggle="tab" data-bs-target="#study" type="button" role="tab" aria-controls="study" aria-selected="false">
                                <i class="fas fa-user-graduate" style="color: white; font-size: 18px; margin-left: 10px;"></i> <span class="ms-1 d-none d-sm-inline">المؤهل الدراسي</span> </a>
                        </li>
                        <li  class="nav-item"  role="presentation" >
                            <a href="#" class="nav-link px-0 align-middle" id="dour-tab" data-bs-toggle="tab" data-bs-target="#dour" type="button" role="tab" aria-controls="dour" aria-selected="false">
                                <i class="fas fa-school" style="color: white; font-size: 18px; margin-left: 10px;"></i> <span class="ms-1 d-none d-sm-inline">الدورات </span> </a>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>
                       
            <div class="col-lg-9 py-5">
                <div class="tab-content" id="myTabContent">
                  
                    <div class="tab-pane fade show  active" id="home" role="tabpanel" aria-labelledby="home-tab">   
                             <div class="card mb-4">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-2">
                              <p class="mb-0">الاسم</p>
                            </div>
                            <div class="col-sm-8">
                              <p class="text-muted mb-0"> افنان محمود</p>
                            </div>
                            <div class="col-sm-2">
                                <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal" style="color: #272162;"> <i class="fas fa-user-edit"></i> </a>    
                                <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_de"class="me-3" style="color: rgb(255, 102, 102);">  <i class="fas fa-trash"></i> </a> 
                              </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-2">
                              <p class="mb-0">الايميل</p>
                            </div>
                            <div class="col-sm-8">
                              <p class="text-muted mb-0">afnanalkadasi22@gamil.com</p>
                            </div>
                            <!-- <div class="col-sm-2">
                                <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal" style="color: #272162;"> <i class="fas fa-user-edit"></i> </a>    
                                <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_de"class="me-3" style="color: rgb(255, 102, 102);">  <i class="fas fa-trash"></i> </a> 
                              </div> -->
                          </div>
                         
                          <hr>
                          <div class="row">
                            <div class="col-sm-2">
                              <p class="mb-0">رقم الجوال</p>
                            </div>
                            <div class="col-sm-8">
                              <p class="text-muted mb-0">7744443898</p>
                            </div>
                            <!-- <div class="col-sm-2">
                                <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal" style="color: #272162;"> <i class="fas fa-user-edit"></i> </a>    
                                <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_de"class="me-3" style="color: rgb(255, 102, 102);">  <i class="fas fa-trash"></i> </a> 
                              </div> -->
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-2">
                              <p class="mb-0">العنوان</p>
                            </div>
                            <div class="col-sm-8">
                              <p class="text-muted mb-0">تعز-الحبيل</p>
                            </div>
                            <!-- <div class="col-sm-2">
                                <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal" style="color: #272162;"> <i class="fas fa-user-edit"></i> </a>    
                                <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_de"class="me-3" style="color: rgb(255, 102, 102);">  <i class="fas fa-trash"></i> </a> 
                              </div> -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade col-lg-12   " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div type="button" data-bs-toggle="modal" data-bs-target="#myModal_exp" style="color:#272162;" class="me-auto mb-2 row float-start ">
                            <i class="fas fa-plus"></i>
                        </div>
                        <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_exp" style="color: #272162; float: left;"> <i class="fas fa-user-edit"></i> </a>    
                        <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_de"class="me-3" style="float: left; color: rgb(255, 102, 102);">  <i class="fas fa-trash"></i> </a> 
                     
                        <br>
                        <br>
                      <div class="card mb-4">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-sm-2">
                                      <p class="mb-0">سنوات الخبرة</p>
                                    </div>
                                    <div class="col-sm-8">
                                      <p class="text-muted mb-0">  1 </p>
                                    </div>
                                    <!-- <div class="col-sm-2">
                                        <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_exp" style="color: #272162;"> <i class="fas fa-user-edit"></i> </a>    
                                        <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_de"class="me-3" style="color: rgb(255, 102, 102);">  <i class="fas fa-trash"></i> </a> 
                                      </div> -->
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-2">
                                      <p class="mb-0">ما هي خبراتك</p>
                                    </div>
                                    <div class="col-sm-8">
                                      <p class="text-muted mb-0"> تصميم مواقع ويب - تصميم جرافكس</p>
                                    </div>
                                    <!-- <div class="col-sm-2">
                                        <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_exp" style="color: #272162;"> <i class="fas fa-user-edit"></i> </a>    
                                        <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_de"class="me-3" style="color: rgb(255, 102, 102);">  <i class="fas fa-trash"></i> </a> 
                                      </div> -->
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-2">
                                      <p class="mb-0"> اخر وظيفة</p>
                                    </div>
                                    <div class="col-sm-8">
                                      <p class="text-muted mb-0">لايوجد</p>
                                    </div>
                                    <!-- <div class="col-sm-2">
                                        <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_exp" style="color: #272162;"> <i class="fas fa-user-edit"></i> </a>    
                                        <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_de"class="me-3" style="color: rgb(255, 102, 102);">  <i class="fas fa-trash"></i> </a> 
                                      </div> -->
                                  </div>
                                </div>
                          </div>
                       
                    </div>
                    <div class="tab-pane fade col-lg-12 " id="skill" role="tabpanel" aria-labelledby="skill-tab">
                        <div type="button" data-bs-toggle="modal" data-bs-target="#myModal_skill" style="color:#272162;" class="me-auto mb-2 row float-start ">
                            <i class="fas fa-plus"></i>
                            
                        </div>
                        <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_exp" style="color: #272162; float: left;"> <i class="fas fa-user-edit"></i> </a>    
                        <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_de"class="me-3" style="float: left; color: rgb(255, 102, 102);">  <i class="fas fa-trash"></i> </a> 
                     
                        <br>
                        <br> 
                      <div class="card mb-4 mb-md-0">
                                  <div class="card-body">
                                    <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                    <div class="progress rounded" style="height: 5px;">
                                      <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                    <div class="progress rounded" style="height: 5px;">
                                      <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                    <div class="progress rounded" style="height: 5px;">
                                      <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                    <div class="progress rounded" style="height: 5px;">
                                      <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                    <div class="progress rounded mb-2" style="height: 5px;">
                                      <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                  </div>
                                  
                            </div>     
                    </div>
                    <div class="tab-pane fade col-lg-12 " id="study" role="tabpanel" aria-labelledby="study-tab">
                        <div type="button" data-bs-toggle="modal" data-bs-target="#myModal_study" style="color:#272162;" class="me-auto mb-2 row float-start ">
                            <i class="fas fa-plus"></i>
                        </div>
                        <br>
                        <br> 
                      <div class="card mb-4">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-sm-2">
                                      <p class="mb-0">هل لديك شهادة جامعية</p>
                                    </div>
                                    <div class="col-sm-8">
                                      <p class="text-muted mb-0">  نعم </p>
                                    </div>
                                    <div class="col-sm-2">
                                        <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_study" style="color: #272162;"> <i class="fas fa-user-edit"></i> </a>    
                                        <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_de"class="me-3" style="color: rgb(255, 102, 102);">  <i class="fas fa-trash"></i> </a> 
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-2">
                                      <p class="mb-0"> المؤهل الدراسي</p>
                                    </div>
                                    <div class="col-sm-8">
                                      <p class="text-muted mb-0"> جامعي </p>
                                    </div>
                                    <!-- <div class="col-sm-2">
                                        <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_study" style="color: #272162;"> <i class="fas fa-user-edit"></i> </a>    
                                        <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_de"class="me-3" style="color: rgb(255, 102, 102);">  <i class="fas fa-trash"></i> </a> 
                                      </div> -->
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-2">
                                      <p class="mb-0"> المعدل </p>
                                    </div>
                                    <div class="col-sm-8">
                                      <p class="text-muted mb-0">84%</p>
                                    </div>
                                    <!-- <div class="col-sm-2">
                                        <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_study" style="color: #272162;"> <i class="fas fa-user-edit"></i> </a>    
                                        <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_de"class="me-3" style="color: rgb(255, 102, 102);">  <i class="fas fa-trash"></i> </a> 
                                      </div> -->
                                  </div>
                                </div>
                            </div>
                      
                    </div>
                    <div class="tab-pane fade col-lg-12 " id="dour" role="tabpanel" aria-labelledby="dour-tab">
                        <div type="button" data-bs-toggle="modal" data-bs-target="#myModal_dour" style="color:#272162;" class="me-auto mb-2 row float-start ">
                            <i class="fas fa-plus"></i>
                        </div>
                        <br>
                        <br>     
                      <div class="card mb-4">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <p class="mb-0">هل سبق وان درست دورات سابقة؟</p>
                                    </div>
                                    <div class="col-sm-7">
                                      <p class="text-muted mb-0">  نعم </p>
                                    </div>
                                    <div class="col-sm-2">
                                        <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_dour" style="color: #272162;"> <i class="fas fa-user-edit"></i> </a>    
                                        <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_de"class="me-3" style="color: rgb(255, 102, 102);">  <i class="fas fa-trash"></i> </a> 
                                      </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-2">
                                      <p class="mb-0"> دورات تصميم</p>
                                    </div>
                                    <div class="col-sm-8">
                                      <p class="text-muted mb-0"> Adobe Photoshop - Adobe XD  - Adobe Illustrator </p>
                                    </div>
                                    <!-- <div class="col-sm-2">
                                        <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_dour" style="color: #272162;"> <i class="fas fa-user-edit"></i> </a>    
                                        <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_de"class="me-3" style="color: rgb(255, 102, 102);">  <i class="fas fa-trash"></i> </a> 
                                      </div> -->
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-2">
                                      <p class="mb-0"> دورات لغة </p>
                                    </div>
                                    <div class="col-sm-8">
                                      <p class="text-muted mb-0">الإنجليزية- العربية</p>
                                    </div>

                                    <!-- <div class="col-sm-2">
                                        <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_dour" style="color: #272162;"> <i class="fas fa-user-edit"></i> </a>    
                                        <a type="button"  data-bs-toggle="modal" data-bs-target="#myModal_de"class="me-3" style="color: rgb(255, 102, 102);">  <i class="fas fa-trash"></i> </a> 
                                      </div>      -->
                                                                 </div>
                                </div>
                              </div>
                    </div>
                  </div>
              </div>
        </div> 
        <div class="col" >
            <nav aria-label="breadcrumb" class="rounded-3 p-1  ">
                <footer class="  align-items-center  my-4 border-top">
                    <ul class="nav  col-md-4 text-center list-unstyled py-3 d-flex">
                        <i class="fab fa-facebook  me-3" style="color: white; font-size: 30px;"></i>
                        <i class="fab fa-facebook-messenger me-3" style="color: white; font-size: 30px;"></i>
                        <i class="fab fa-instagram me-3" style="color: white; font-size: 30px;"></i>

                    </ul>
                  </footer>
              </nav>
        </div>
       
    </div>
 
<!-- ////////////////info     -->
<section>
    <div class="modal" id="myModal_de">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
      
            <!-- Modal body -->
            <div class="modal-body">
            <label> هل انت متاكد من الحذف</label>
            </div>
      
            <!-- Modal footer -->
            <div class="modal-footer">
              <button type="button" class="btn btn-danger w-25  " data-bs-dismiss="modal">نعم</button>
            <button type="button" class="btn btn-secondary w-25 " data-bs-dismiss="modal">لا</button>
            </div>
          </div>
        </div>
      </div>
</section>
<section>
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
      
      
            <!-- Modal body -->
             <form id="contactForm1" class="cont_Form form1"  >
                                
                                                      <!-- Name input -->
                                                      <div class="mb-3">
                                                        <label class="form-label" for="name">الاسم الكامل</label>
                                                        <input class="form-control" id="name" type="text" placeholder="الاسم" />
                                                      </div>
                                                  
                                                      <div class="form-group row required" id="bday-selects" aria-required="true">
                                                              <label class="col-xs-12 col-sm-3 control-label">تاريخ الميلاد</label>
                                                              <div class="col-xs-12 col-sm-3">
                                                              <select name="profile[birthdate(3i)]" id="profile_birthdate_3i_" class="form-control" data-placeholder="اليوم">
                                                              <option value="" label=" "></option><option value="1">1</option>
                                                              <option value="2">2</option>
                                                              <option value="3">3</option>
                                                              <option value="4">4</option>
                                                              <option value="5">5</option>
                                                              <option value="6">6</option>
                                                              <option value="7">7</option>
                                                              <option value="8">8</option>
                                                              <option value="9">9</option>
                                                              <option value="10">10</option>
                                                              <option value="11">11</option>
                                                              <option value="12">12</option>
                                                              <option value="13">13</option>
                                                              <option value="14">14</option>
                                                              <option value="15">15</option>
                                                              <option value="16">16</option>
                                                              <option value="17">17</option>
                                                              <option value="18">18</option>
                                                              <option value="19">19</option>
                                                              <option value="20">20</option>
                                                              <option value="21">21</option>
                                                              <option value="22">22</option>
                                                              <option value="23">23</option>
                                                              <option value="24">24</option>
                                                              <option value="25">25</option>
                                                              <option value="26">26</option>
                                                              <option value="27">27</option>
                                                              <option value="28">28</option>
                                                              <option value="29">29</option>
                                                              <option value="30">30</option>
                                                              <option value="31">31</option></select>
                                                              </div>
                                                              <div class="col-xs-12 col-sm-3">
                                                              <select name="profile[birthdate(2i)]" id="profile_birthdate_2i_" class="form-control" data-placeholder="الشهر"><option value="" label=" "></option><option value="1">يناير</option>
                                                              <option value="2">فبراير</option>
                                                              <option value="3">مارس</option>
                                                              <option value="4">ابريل</option>
                                                              <option value="5">مايو</option>
                                                              <option value="6">يونيو</option>
                                                              <option value="7">يوليو</option>
                                                              <option value="8">اغسطس</option>
                                                              <option value="9">سبتمبر</option>
                                                              <option value="10">اكتوبر</option>
                                                              <option value="11">نوفمبر</option>
                                                              <option value="12">ديسمبر</option></select>
                                                              </div>
                                                              <div class="col-xs-12 col-sm-3">
                                                              <select name="profile[birthdate(1i)]" id="profile_birthdate_1i_" class="form-control" data-placeholder="السنة">
                                                              <option value="" label=" "></option>[]<option>2012</option><option>2011</option><option>2010</option><option>2009</option><option>2008</option><option>2007</option><option>2006</option><option>2005</option><option>2004</option><option>2003</option><option>2002</option><option>2001</option><option>2000</option><option>1999</option><option>1998</option><option>1997</option><option>1996</option><option>1995</option><option>1994</option><option>1993</option><option>1992</option><option>1991</option><option>1990</option><option>1989</option><option>1988</option><option>1987</option><option>1986</option><option>1985</option><option>1984</option><option>1983</option><option>1982</option><option>1981</option><option>1980</option><option>1979</option><option>1978</option><option>1977</option><option>1976</option><option>1975</option><option>1974</option><option>1973</option><option>1972</option><option>1971</option><option>1970</option><option>1969</option><option>1968</option><option>1967</option><option>1966</option><option>1965</option><option>1964</option><option>1963</option><option>1962</option><option>1961</option><option>1960</option><option>1959</option><option>1958</option><option>1957</option><option>1956</option><option>1955</option><option>1954</option><option>1953</option><option>1952</option><option>1951</option><option>1950</option><option>1949</option><option>1948</option><option>1947</option><option>1946</option><option>1945</option><option>1944</option><option>1943</option><option>1942</option></select>
                                                              </div>
                                                              <div class="col-xs-12 col-sm-9 col-sm-offset-3">
                                                              <div id="profile_birthdate_messages"></div>
                                                              </div>
                                                      </div>
                                                      <br>
                                                      <div class="form-group row required" aria-required="true">
                                                              <label class="col-xs-12 col-sm-3 control-label">الجنس</label>
                                                              <div class="col-xs-12 col-sm-9">
                                                              <div class="radio col-xs-6 col-sm-3">
                                                              <label>
                                                              <input type="radio" value="Male" name="profile[gender]" id="profile_gender_male">
                                                              ذكر
                                                              </label>
                                                              </div>
                                                              <div class="radio col-xs-6 col-sm-3">
                                                              <label>
                                                              <input type="radio" value="Female" name="profile[gender]" id="profile_gender_female">
                                                              أنثى
                                                              </label>
                                                              </div>
                                                              <div class="row">
                                                              <div class="col-xs-12 col-sm-9">
                                                              <div id="profile_gender_messages"></div>
                                                              </div>
                                                              </div>
                                                              </div>
                                                      </div>
                                                      <br>
                                                      <div class="form-group row required" aria-required="true">
                                                              <label class="col-xs-12  control-label">الحالة الاجتماعية</label>
                                                              <div class="col-xs-12 col-sm-9">
                                                                      &nbsp;  &nbsp;
                                                                      &nbsp;
                                                                      &nbsp;
                                                                      &nbsp;
                                                                      &nbsp;
                                                              <span class="radio col-xs-6 ">
                                                              <label>
                                                              <input type="radio" value="Single" name="profile[marital_status]" id="profile_marital_status_single">
                                                              اعزب
                                                              </label>
                                                              </span>
                                                              &nbsp;
                                                              &nbsp;
                                                              &nbsp;
                                                              &nbsp;  &nbsp;
                                                              &nbsp;
                                                              <span class="radio col-xs-6 ">
                                                              <label>
                                                              <input type="radio" value="Married" name="profile[marital_status]" id="profile_marital_status_married">
                                                              متزوج
                                                          </label>
                                                              </span>
                                                              <div class="row">
                                                              <div class="col-xs-12 col-sm-9">
                                                              <div id="profile_marital_status_messages"></div>
                                                              </div>
                                                              </div>
                                                              </div>
                                                      </div>
                                                      <br>
                                                      <div class="form-group row required" aria-required="true"> 
                                                              <div class="col-xs-12 col-sm-3 text-right">
                                                              <label class="control-label">الجنسيات</label>
                                                              </div>
                                                      
                                                              <div class="col-xs-12  col-sm-9">
                                                                      <select class="form-control col-sm-3 " data-placeholder="اختر جنسيتك">
                                                                              <option value="UAE">الإمارات</option>
                                                                              <option value="Bahrain">البحرين</option>
                                                                              <option value="Algeria">الجزائر</option>
                                                                              <option value="Saudi Arabia">السعودية</option>
                                                                              <option value="Sudan">السودان</option>
                                                                              <option value="Somalia">الصومال</option>
                                                                              <option value="Iraq">العراق</option>
                                                                              <option value="Kuwait">الكويت</option>
                                                                              <option value="Morocco">المغرب</option>
                                                                              <option value="Yemen">اليمن</option>
                                                                              <option value="Tunisia">تونس</option>
                                                                              <option value="Djibouti">جيبوتي</option>
                                                                              <option value="Syria">سوريا</option>
                                                                              <option value="Oman">عُمان</option>
                                                                              <option value="Palestine">فلسطين</option>
                                                                              <option value="Qatar">قطر</option>
                                                                              <option value="Lebanon">لبنان</option>
                                                                              <option value="Libya">ليبيا</option>
                                                                              <option value="Egypt">مصر</option>
                                                                      </select> 
                                                              </div>
                                                              <div class="col-xs-12 col-sm-9 col-sm-offset-3">
                                                              <div id="profile_citizenship_countries_messages"></div>
                                                              </div>
                                                      </div>
                                                      <br>
                                                      <div class="form-group row required" aria-required="true"> 
                                                              <div class="col-xs-12 col-sm-3 text-right">
                                                              <label class="control-label">البلد</label>
                                                              </div>
                                                      
                                                              <div class="col-xs-12  col-sm-9">
                                                                      <select class="form-control col-sm-3 " data-placeholder="اختر جنسيتك">
                                                                              <option value="UAE">اليمن</option>   
                                                                              <option value="UAE">الإمارات</option>
                                                                              <option value="Bahrain">البحرين</option>
                                                                              <option value="Algeria">الجزائر</option>
                                                                              <option value="Saudi Arabia">السعودية</option>
                                                                              <option value="Sudan">السودان</option>
                                                                              <option value="Somalia">الصومال</option>
                                                                              <option value="Iraq">العراق</option>
                                                                              <option value="Kuwait">الكويت</option>
                                                                              <option value="Morocco">المغرب</option>
                                                                              <option value="Yemen">اليمن</option>
                                                                              <option value="Tunisia">تونس</option>
                                                                              <option value="Djibouti">جيبوتي</option>
                                                                              <option value="Syria">سوريا</option>
                                                                              <option value="Oman">عُمان</option>
                                                                              <option value="Palestine">فلسطين</option>
                                                                              <option value="Qatar">قطر</option>
                                                                              <option value="Lebanon">لبنان</option>
                                                                              <option value="Libya">ليبيا</option>
                                                                              <option value="Egypt">مصر</option>
                                                                      </select> 
                                                              </div>
                                                              <div class="col-xs-12 col-sm-9 col-sm-offset-3">
                                                              <div id="profile_citizenship_countries_messages"></div>
                                                              </div>
                                                      </div>
                                                   
               </form>
      
            <!-- Modal footer -->
            <br>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">حفظ</button>
            </div>
      
          </div>
        </div>
      </div>
      
</section>
<!-- ////////////////////exper -->
<section>
    <div class="modal" id="myModal_exp">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
      
      
            <!-- Modal body -->
            <form id="contactForm2" class="cont_Form form2">
                <div class="form-group row required" aria-required="true">
                        <label class="col-xs-12  control-label">هل لديك خبرة عمل؟</label>
                        <div class="col-xs-12 row me-auto mb-3 col-sm-9">
                        <div class="radio col-xs-6 col-sm-3">
                        <label>
                        <input type="radio" value="Male" name="profile[gender]" id="profile_gender_male">
                            نعم
                        </label>
                        </div>
                        <div class="radio col-xs-6 col-sm-3">
                        <label>
                        <input type="radio" value="Female" name="profile[gender]" id="profile_gender_female">
                        لا
                        </label>
                        </div>
                        <div class="row">
                        <div class="col-xs-12 col-sm-9">
                        <div id="profile_gender_messages"></div>
                        </div>
                        </div>
                        </div>
                </div>
                <div class="form-group row required" >
                        <label class="col-xs-12 control-label">مجموع سنوات الخبرة</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <div class="col-xs-12 col-sm-3">
                        <select class="form-control" >
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16+</option></select>
                        </div>
                 </div>
                 <div class="form-group row required" aria-required="true" >
                        <label class="col-xs-12 control-label">أحدث مسمى وظيفي</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="col-xs-12 col-sm-9">
                        <input maxlength="100" class="form-control" size="100" type="text" name="profile[job_title]" id="profile_job_title">
                        </div>
                        <div class="col-xs-12 col-sm-9 col-sm-offset-3">
                        <div id="profile_job_title_messages"></div>
                        </div>
        </div>

        </form>
      
            <!-- Modal footer -->
            <br>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">حفظ</button>
            </div>
      
          </div>
        </div>
      </div>
      
</section>
<!-- //////////////////skill -->
<section>
    <div class="modal" id="myModal_skill">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
      
      
            <!-- Modal body -->
            <form id="contactForm3" class="cont_Form form3"  >
                <div class="form-group row required" aria-required="true">
                        <label class="col-xs-12  control-label">هل تملك مهارة حل المشاكل؟</label>
                        <div class="col-xs-12 row me-auto mb-3 col-sm-9">
                        <div class="radio col-xs-6 col-sm-3">
                        <label>
                        <input type="radio" value="Male" name="profile[gender]" id="profile_gender_male">
                            نعم
                        </label>
                        </div>
                        <div class="radio col-xs-6 col-sm-3">
                        <label>
                        <input type="radio" value="Female" name="profile[gender]" id="profile_gender_female">
                        لا
                        </label>
                        </div>
                        <div class="row">
                        <div class="col-xs-12 col-sm-9">
                        <div id="profile_gender_messages"></div>
                        </div>
                        </div>
                        </div>
                </div>
                <div class="form-group row required" aria-required="true">
                        <div id="languages" class=" row">
                            <label class="col-xs-12 col-sm-3 control-label">
                            اللغات                                                          
                        </label>
                        <div id="languages_ul" class="extended_container form_horizontal_list col-sm-9">
                          
                            <div class="row" data-index="0">
                          
                          
                          
                          
                          <div class="form-control-select col-xs-11 col-sm-5" id="languages_li_0">
                            
                            
                            <select rel="main" class="chosen-select languages form-control" name="extended_profile[languages][0][id]"><option disabled="" selected="selected" value=""></option>
                        
                          <option value="Arabic">العربية</option>
                        
                          <option value="English">الإنجليزية</option>
                        
                          <option value="Urdu">الأردية</option>
                        
                          <option value="Armenian">الأرمينية</option>
                        
                          <option value="Spanish">الأسبانية</option>
                        
                          <option value="German">الألمانية</option>
                        
                          <option value="Italian">الإيطالية</option>
                        
                          <option value="Portuguese">البرتغالية</option>
                        
                          <option value="Bengali">البنغالية</option>
                        
                          <option value="Turkish">التركية</option>
                        
                          <option value="Danish">الدانمركية</option>
                        
                          <option value="Russian">الروسية</option>
                        
                          <option value="Swedish">السويدية</option>
                        
                          <option value="Hebrew">العبرية</option>
                        
                          <option value="Persian">الفارسية</option>
                        
                          <option value="French">الفرنسية</option>
                        
                          <option value="Finnish">الفنلندية</option>
                        
                          <option value="Cantonese">الكانتونية</option>
                        
                          <option value="Kurdish">الكردية</option>
                        
                          <option value="Mandarin">الماندارية</option>
                        
                          <option value="Norwegian">النرويجية</option>
                        
                          <option value="Hindi">الهندية</option>
                        
                          <option value="Dutch">الهولندية</option>
                        
                          <option value="Japanese">اليابانية</option>
                        
                          <option value="Greek">اليونانية</option></select>
                          </div>
                          
                            
                              <div class="col-xs-11 col-sm-5 no-padding-right">
                                
                                <select rel="proficiency" name="extended_profile[languages][0][proficiency]" class="languages proficiency form-control">
                                  
                                    
                          
                          <option value="Beginner">
                            مبتدئ
                          </option>
                        
                          
                          <option value="Intermediate">
                            متوسط
                          </option>
                        
                          
                          <option value="Fluent">
                            التحدث بطلاقة
                          </option>
                        
                        
                                  
                                </select>
                              </div>
                            
                          
                          
                            <span class="col-xs-1 col-sm-1 col-xs-offset--1 col-sm-offset-1" style="display: none;">
                              <a href="#" class="remove">
                                <i class="fa fa-times pull-right">
                                </i>
                              </a>
                            </span>
                          
                        </div>
                   </div>
                        
                       
                        
                        
                        
                        </div>
                        </div>
                <div class="form-group row required" aria-required="true">
                        <label class="col-xs-12  control-label">هل تملك مهارة استخدام الحاسوب؟</label>
                        <div class="col-xs-12 row me-auto mb-3 col-sm-9">
                        <div class="radio col-xs-6 col-sm-3">
                        <label>
                        <input type="radio" value="Male" name="profile[gender]" id="profile_gender_male">
                            نعم
                        </label>
                        </div>
                        <div class="radio col-xs-6 col-sm-3">
                        <label>
                        <input type="radio" value="Female" name="profile[gender]" id="profile_gender_female">
                        لا
                        </label>
                        </div>
                        <div class="row">
                        <div class="col-xs-12 col-sm-9">
                        <div id="profile_gender_messages"></div>
                        </div>
                        </div>
                        </div>
                </div>
                <div class="form-group row required" aria-required="true"> 
                        <div class="col-xs-12 col-sm-3 text-right">
                        <label class="control-label">مهارات فنية</label>
                        </div>
                
                        <div class="col-xs-12  col-sm-6">
                                <select class="form-control col-sm-3 " data-placeholder="اختر جنسيتك">
                                        <option value="UAE">الرسم</option>   
                                        <option value="UAE">النقش</option>
                                        <option value="Bahrain">الغناء</option>
                                      
                
                                </select> 
                        </div>
                        <div class="col-xs-12 col-sm-9 col-sm-offset-3">
                        <div id="profile_citizenship_countries_messages"></div>
                        </div>
                </div>    
                <br>  
                <div class="form-group row required" aria-required="true"> 
                        <div class="col-xs-12 col-sm-3 text-right">
                        <label class="control-label">مهارات  بدنية</label>
                        </div>
                
                        <div class="col-xs-12  col-sm-6">
                                <select class="form-control col-sm-3 " data-placeholder="اختر جنسيتك">
                                        <option value="UAE">السباحة</option>   
                                        <option value="UAE">الجري</option>
                                        <option value="Bahrain">القفز</option>
                                      
                
                                </select> 
                        </div>
                        <div class="col-xs-12 col-sm-9 col-sm-offset-3">
                        <div id="profile_citizenship_countries_messages"></div>
                        </div>
                </div>  
                <div class="mb-3">
                        <label class="form-label" for="name">مهارات اخرى</label>
                        <input class="form-control" id="name" type="text" placeholder="اكتب..." />
                      </div>
        </form>
      
            <!-- Modal footer -->
            <br>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">حفظ</button>
            </div>
      
          </div>
        </div>
      </div>
      
</section>
<!-- ///////////////study/ -->
<section>
    <div class="modal" id="myModal_study">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
      
      
            <!-- Modal body -->
            <form id="contactForm4" class="cont_Form form4"  >
                <div class="form-group row required" aria-required="true">
                        <label class="col-xs-12  control-label">هل لديك شهادة جامعية؟</label>
                        <div class="col-xs-12 row me-auto mb-3 col-sm-9">
                        <div class="radio col-xs-6 col-sm-3">
                        <label>
                        <input type="radio" value="Male" name="profile[gender]" id="profile_gender_male">
                            نعم
                        </label>
                        </div>
                        <div class="radio col-xs-6 col-sm-3">
                        <label>
                        <input type="radio" value="Female" name="profile[gender]" id="profile_gender_female">
                        لا
                        </label>
                        </div>
                        <div class="row">
                        <div class="col-xs-12 col-sm-9">
                        <div id="profile_gender_messages"></div>
                        </div>
                        </div>
                        </div>
                </div>

                <div class="form-group row required" aria-required="true"> 
                        <div class="col-xs-12 col-sm-3 text-right">
                        <label class="control-label"> المؤهل الدراسي</label>
                        </div>
                
                        <div class="col-xs-12  col-sm-6">
                                <select class="form-control col-sm-3 " data-placeholder="اختر جنسيتك">
                                        <option value="UAE">مدرسي</option>   
                                        <option value="UAE">جامعي</option>
                                        <option value="Bahrain">دكتوراة</option>
                                      
                
                                </select> 
                        </div>
                        <div class="col-xs-12 col-sm-9 col-sm-offset-3">
                        <div id="profile_citizenship_countries_messages"></div>
                        </div>
                </div>  
                <br>
                
                <div class="form-group row required">
                        <label class="control-label " for="name"> المعدل الدراسي</label>
                        &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;
                        <div class="col-xs-12  col-sm-6">
                        <input class="form-control col-sm-3" id="name" type="text" placeholder="المعدل%" />
                         </div>
                    </div>  
              
        </form>
      
            <!-- Modal footer -->
            <br>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">حفظ</button>
            </div>
      
          </div>
        </div>
      </div>
      
</section>
<!-- ///////////////dour/ -->
<section>
    <div class="modal" id="myModal_dour">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
      
      
            <!-- Modal body -->
            <form id="contactForm5" class="cont_Form form5" >
                <div class="form-group row required" aria-required="true">
                        <label class="col-xs-12  control-label">هل سبق وان درست دورات سابقة؟</label>
                        <div class="col-xs-12 row me-auto mb-3 col-sm-9">
                        <div class="radio col-xs-6 col-sm-3">
                        <label>
                        <input type="radio" value="Male" name="profile[gender]" id="profile_gender_male">
                            نعم
                        </label>
                        </div>
                        <div class="radio col-xs-6 col-sm-3">
                        <label>
                        <input type="radio" value="Female" name="profile[gender]" id="profile_gender_female">
                        لا
                        </label>
                        </div>
                        <div class="row">
                        <div class="col-xs-12 col-sm-9">
                        <div id="profile_gender_messages"></div>
                        </div>
                        </div>
                        </div>
                </div>

                <div class="form-group row required" aria-required="true"> 
                        <div class="col-xs-12 col-sm-3 text-right">
                        <label class="control-label"> دورات تصميم</label>
                        </div>
                
                        <div class="col-xs-12  col-sm-6">
                                <select class="form-control col-sm-3 " data-placeholder="اختر جنسيتك">
                                        <option value="UAE">Adobe Photoshop</option>   
                                        <option value="UAE">Adobe XD </option>
                                        <option value="Bahrain">Adobe Illustrator</option>                                                
                                </select> 
                        </div>
                        <div class="col-xs-12 col-sm-9 col-sm-offset-3">
                        <div id="profile_citizenship_countries_messages"></div>
                        </div>
                </div>  
                <br>
                <div class="form-group row required" aria-required="true"> 
                        <div class="col-xs-12 col-sm-3 text-right">
                        <label class="control-label"> دورات لغة</label>
                        </div>
                
                        <div class="col-xs-12  col-sm-6">
                                <select class="form-control col-sm-3 " data-placeholder="اختر جنسيتك">
                                        <option value="UAE">الإنجليزية</option>   
                                        <option value="UAE">الفرنسية </option>
                                        <option value="Bahrain">الكورية</option>                                                
                                </select> 
                        </div>
                        <div class="col-xs-12 col-sm-9 col-sm-offset-3">
                        <div id="profile_citizenship_countries_messages"></div>
                        </div>
                </div> 
                <div class="form-group row required">
                        <label class="control-label " for="name"> دورات اخرى</label>
                        &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;
                        <div class="col-xs-12  col-sm-6">
                        <input class="form-control col-sm-3" id="name" type="text" placeholder="اكتب..." />
                         </div>
                    </div> 
 </form>
      
            <!-- Modal footer -->
            <br>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">حفظ</button>
            </div>
      
          </div>
        </div>
      </div>
      
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>           
</body>
</html>