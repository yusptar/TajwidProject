@extends('master')
@section('content')
<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Kumpulan Berita Islami Masa Kini</h2>
        <p>Aman, Terupdate, dan Terpercaya (y)</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">   

        @foreach($articlesAll as $art)
        <div class="row">
          <div class="col-md-6 d-flex align-items-center">
            <div class="card">
              <div class="card-img">
                <img src="{{$art->featured_image}}" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="{{ '/article/'.$art->id }}">{{$art->title}}</a></h5>
                <p class="font-italic text-center">Date Published {{$art->created_at}}</p>
                <p class="card-text">{{ Str::limit($art->content, 100,'...') }} Read More &rarr;</p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
    </section><!-- End Events Section -->

</main><!-- End #main -->
@endsection