@extends('layouts.web.master')

@section('title') sign in @endsection

@section('content')

        <section class="section_bc ">
              
                    <div class=" container">
                            <div class="row ">
                              <div class="col-md-6 mr_sign Signup">
                                <!-- Sign Up form -->
     
                                <form action="{{ route('save_user') }}" method="POST">
                                @csrf
                                  <br>
                                  <h3 > إنشاء حساب</h3>
                                  <div class="form-group">
                                      <label for="name">الاسم</label>
                                    <input type="text" class="form-control" placeholder="الاسم" name="full_name" >
                                    @error('full_name')
                                        <span class="alert alert-danger">{{ $message }}</span>
                                    @enderror
                                  </div>
                                  <div class="form-group">
                                      <label for="email">البريد الاكتروني</label>
                                    <input type="email" class="form-control" placeholder=" البريد الاكتروني" name="u_email" >
                                    @error('u_email')
                                        <span class="alert alert-danger">{{ $message }}</span>
                                    @enderror
                                  </div>      
                                  <div class="form-group">
                                      <label for="psw">الرقم السري</label>
                                    <input type="password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"  name="user_pass" > 
                                    @error('user_pass')
                                        <span class="alert alert-danger">{{ $message }}</span>
                                    @enderror
                                  </div>   
                                  <div class="form- mb-2">
                                    <label for="psw-repeat">تاكيد الرقم السري</label>
                                    <input type="password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"  name="psw-confirm_pass" >
                                    @error('confirm_pass')
                                        <span class="alert alert-danger">{{ $message }}</span>
                                    @enderror
                                  </div>
                                  <div class="form-group " style="text-align: center;">
                                    <label class="term-policy"><input type="checkbox"> من خلال إنشاء حساب فإنك توافق على <a href="#" style="color: red;">الشروط والخصوصية</a>.</label>
                                  </div>
                                  <button type="submit" class="btn btn-outline-secondary">إنشاء</button>
                                  <hr>
                                  <div class="form-group" style="text-align: center;">
                                    <p class="not-yet">هل لديك حساب؟<a href="/login">تسجيل دخول</a></p>
                                  </div>
                                </form>
                              </div>
                          </div>
                      </div>
</section>
<@endsection
</body>
</html>