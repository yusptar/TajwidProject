@extends('master')
@section('content')    
<!-- ======= Cource Details Section ======= -->
<section id="course-details" class="course-details">
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-8">
        <img src="{{$article->featured_image}}" class="img-fluid" alt="">
          <h3>{{$article->title}}</h3>
          <p>Date published {{$article->created_at}}</p>
          <p style="text-indent: 30px;">{{$article->content}}</p>
      </div>
    </div>
  </div>
</section><!-- End Cource Details Section -->
@endsection
