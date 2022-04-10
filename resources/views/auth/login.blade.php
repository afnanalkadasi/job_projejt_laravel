@extends('layouts.web.master')

@section('title') login @endsection

@section('content')


        <section class="section_bc ">
                    <div class=" container">
                            <div class="row">
                              <div class="col-md-6 mr_sign py-5">
                                <form action="" class="Signup ">
                                  <br>
                                  <h3 >تسجيل الدخول</h3>
                                  <div class="form-group">
                                      <label for="email">البريد الاكتروني</label>
                                    <input type="text" class="form-control" placeholder=" البريد الاكتروني" name="email" required>
                                  </div>  
                                  <br>    
                                  <div class="form-group">
                                      <label for="psw">الرقم السري</label>
                                    <input type="password" class="form-control" placeholder="الرقم السري" name="psw" required> 
                                  </div>   
                                <br>
                                  <button type="submit" class="btn btn-outline-secondary ">دخول</button>
                                  <label style="color: white;"><input type="checkbox" checked="checked" name="remember" > تذكرني</label>
                                  <hr>
                                  <div class="form-group">
                                    <p class="not-yet">لاتملك حساب! &nbsp; &nbsp;&nbsp;<a href="/sign_up">إنشاء حساب</a></p>
                                  </div>
                                </form>
                              </div>
                          </div>
                      </div>
</section>

@endsection
</body>
</html>