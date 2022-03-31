@extends('admin.master')
@section('content')
<h5 class="card-title">Tambah Data Berita</h5>
<main id="main" data-aos="fade-in">
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">
            <form action="/articles/create" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Judul</label>
                        <input type="text" class="form-control" required="required" name="title"></br>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                        <input type="text" class="form-control" required="required" name="content"></br>
                </div>
                <div class="form-group">
                    <label for="image">Feature Image</label>
                        <input type="text" class="form-control" required="required" name="image"></br>
                </div>
                <button type="submit" name="create" class="btn btn-primary float-right">Tambah Data</button>
            </form>
        </div>
    </section>
</main>
@endsection