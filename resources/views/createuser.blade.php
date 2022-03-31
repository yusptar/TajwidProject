@extends('admin.master')
@section('content')
<h5 class="card-title">Tambah Data User</h5>
<main id="main" data-aos="fade-in">
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">
            <form action="/manageuser/create" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                        <input type="text" class="form-control" required="required" name="name"></br>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                        <input type="text" class="form-control" required="required" name="email"></br>
                </div>
                <div class="form-group">
                    <label for="roles">Roles</label>
                        <input type="text" class="form-control" required="required" name="roles"></br>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                        <input type="password" class="form-control" required="required" name="password"></br>
                </div>
                <button type="submit" name="create" class="btn btn-primary float-right">Tambah Data</button>
            </form>
        </div>
    </section>
</main>
@endsection