@extends('admin.master')
@section('content')
<h5 class="card-title">Edit Data Mad</h5>
<main id="main" data-aos="fade-in">
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">
            <form action="/managemad/update/{{$mad->id}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$mad->id}}"></br>
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" required="required" name="title" value="{{$mad->title}}"></br>
                </div>
                <div class="form-group">
                    <label for="pembimbing">Pembimbing</label>
                    <input type="text" class="form-control" required="required" name="pembimbing" value="{{$mad->pembimbing}}"></br>
                </div>
                <div class="form-group">
                    <label for="youtube">Link Source Youtube</label>
                    <input type="text" class="form-control" required="required" name="youtube" value="{{$mad->youtube}}"></br>
                </div>
                <button type="submit" name="editmad" class="btn btn-primary float-right">Ubah Data</button>
            </form>
        </div>
    </section>
</main>
@endsection