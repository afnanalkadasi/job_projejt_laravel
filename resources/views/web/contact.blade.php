@extends('layouts.web.master')

@section('title') Contact @endsection

@section('content')

        <section class="section_bc ">
              
                        <div class="cont container py-4 " >
                           
                            <!-- Bootstrap 5 starter form -->
                            <form id="contactForm" class="cont_Form Signup" >
                          
                              <!-- Name input -->
                              <div class="mb-3">
                                <label class="form-label" for="name">الاسم</label>
                                <input class="form-control" id="name" type="text" placeholder="الاسم" />
                              </div>
                          
                              <!-- Email address input -->
                              <div class="mb-3">
                                <label class="form-label" for="emailAddress">عنوان البريد الاكتروني</label>
                                <input class="form-control" id="emailAddress" type="email" placeholder="البريد الاكتروني" />
                              </div>
                          
                              <!-- Message input -->
                              <div class="mb-3">
                                <label class="form-label" for="message">اقتراحاتك</label>
                                <textarea class="form-control" id="message" type="text" placeholder="اقتراحاتكم" style="height: 10rem;"></textarea>
                              </div>
                          
                              <!-- Form submit button -->
                              <div class="d-grid">
                                <button class="btn btn-primary btn-lg w-50 me-auto" type="submit">إرسال</button>
                              </div>
                            </form>
                          </div>
                             
            </div>
</section>


  @endsection

</body>
</html>
