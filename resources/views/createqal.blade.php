@extends('admin.master')
@section('content')
<h5 class="card-title">Tambah Data Qalqalah</h5>
<main id="main" data-aos="fade-in">
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">
            <form action="/manageqal/create" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Judul</label>
                        <input type="text" class="form-control" required="required" name="title"></br>
                </div>
                <div class="form-group">
                    <label for="pembimbing">Pembimbing</label>
                        <input type="text" class="form-control" required="required" name="pembimbing"></br>
                </div>
                <div class="form-group">
                    <label for="youtube">Link Source Youtube</label>
                        <input type="text" class="form-control" required="required" name="youtube"></br>
                </div>
                <button type="submit" name="create" class="btn btn-primary float-right">Tambah Data</button>
            </form>
        </div>
    </section>
</main>
@endsection