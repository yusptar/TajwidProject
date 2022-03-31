@extends('master')
@section('content')
<main id="main" data-aos="fade-in">
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">
    <h2>Qalqalah</h2>
    <h7>Menurut bahasa qalqalah artinya gerak, sedangkan menurut istilah qalqalah adalah bunyi huruf yang 
      memantul bila ia mati atau dimatikan, atau suara membalik dengan bunyi rangkap.
      Adapun huruf qalqalah terdiri atas lima huruf, yaitu<br>ق , ط , ب , ج , د agar mudah dihafal 
      dirangkai menjadi قُطْبُ جَدٍ</h7>
  </div>
</div><!-- End Breadcrumbs -->

<section id="why-us" class="why-us">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-lg-4 d-flex align-items-stretch">
        <div class="content">
          <h3>Jenis Qalqalah Terbagi 2 Macam, yaitu :</h3>
        </div>
      </div>
      <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-boxes d-flex flex-column justify-content-center">
          <div class="row">
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bx-receipt"></i>
                <h4>Qalqalah Kubra</h4>
                <h6>yaitu Huruf Qalqalah yang berbaris hidup, dimatikan karena waqaf. inilah Qalqalah yang paling utama, cara membacanya dikeraskan qalqalahnya.<br><br>

                  Contoh :<br><br>

                  مَا خَلَقَ . أُوْلُوا اْلأَلْبَابِ . زَوْجٍ بَهِيْجٍ<br><br>   
                  </h6>
              </div>
            </div>
            <div class="col-xl-4 d-flex align-items-stretch">
              <div class="icon-box mt-4 mt-xl-0">
                <i class="bx bx-receipt"></i>
                <h4>Qalqalah Sugra</h4>
                <h6>yaitu Huruf Qalqalah yang berbaris mati, tetapi tidak waqaf (berhenti) padanya,caranya membacanya kurang dikeraskan Qalqalahnya.</h5><br>
                  Contoh :<br><br>

                  يَقْطَعُوْنَ إِلاَّ إِبْلِيْسَ وَمَا أَدْرَاكَ
                </h6>
              </div>
            </div>        
        </div><!-- End .content-->
      </div>
    </div>

  </div>
</section>

<!-- ======= Courses Section ======= -->
<section id="courses" class="courses">
  <div class="container" data-aos="fade-up">

    <div class="row" data-aos="zoom-in" data-aos-delay="100">

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="course-item">
          <img src="https://belajaralquran.id/wp-content/uploads/2017/12/contoh-qolqolah.jpg
          " class="img-fluid" alt="...">
          <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4>Macam Huruf Qalqalah</h4>
            </div>

            <h3><a href="#"></a></h3>
            <p>Contoh Lain dari qolqolah, perhatikan yang diberi warna merah</p>
            <div class="trainer d-flex justify-content-between align-items-center">
              <div class="trainer-profile d-flex align-items-center">
                
              </div>

            </div>
          </div>
        </div>
      </div> <!-- End Course Item-->
</section><!-- End Courses Section -->

<!-- ======= Events Section ======= -->
<section id="why-us" class="why-us">
<section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="content">
            <h3>Video Pembelajaran Qalqalah</h3>
          </div>
        </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
            @foreach($qalqalahAll as $qal)
              <div class="video">
                <iframe width="480" height="360" src="{{$qal->youtube}}" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">{{$qal->title}}</a></h5>
              </div>
            @endforeach
            </div>
          </div>
        </div>

      </div>
    </section>
    </section><!-- End Events Section -->
</main>
@endsection
