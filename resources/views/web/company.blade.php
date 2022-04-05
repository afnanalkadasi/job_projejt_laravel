@extends('layouts.web.master')

@section('title') Company @endsection

@section('content')

        <section class="section1 ">
            <div class=" text-secondary px-4 py-5 text-center" style="background-color:#272162; opacity: .9;">
                <div class="py-5">
                  <h1 class="display-5 py-5 fw-bold text-white"> شركاتنا</h1>
                  </div>
                </div>
              </div>
          </section>
      <section>
          <div class="container_im py-5 d-flex align-items-center justify-content-center position-relative flex-wrap">
              <div class="card d-flex position-relative flex-column">
                  <div class='imgContainer'> <img src='img/comp1.png'> </div>
                  <div class="content">
                      <h2>شركة امزون</h2>
                      <p> 
                          شركائنا
                          كورنر للخدمات التجارية والنقل شركائنا
                          كورنر للخدمات التجارية والنقل</p>
                  </div>
              </div>
              <div class="card d-flex position-relative flex-column">
                  <div class='imgContainer'> <img src='img/comp2.png'> </div>
                  <div class="content">
                      <h2>شركة VISA </h2>
                      <p> 
                          شركائنا
                          كورنر للخدمات التجارية والنقل
                          شركائنا
                          كورنر للخدمات التجارية والنقل</p>
                                          </div>
              </div>
              <div class="card d-flex position-relative flex-column">
                  <div class='imgContainer'> <img src='img/comp3.png'> </div>
                  <div class="content">
                      <h2> شركة Microsoft </h2>
                      <p> 
                          شركائنا
                          كورنر للخدمات التجارية والنقل شركائنا
                          كورنر للخدمات التجارية والنقل
                        </p>
                                          </div>
              </div>
          </div>
      </section>

      @endsection

</body>
</html>