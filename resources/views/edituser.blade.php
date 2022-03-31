@extends('admin.master')
@section('content')
<h5 class="card-title">Edit Data User</h5>
<main id="main" data-aos="fade-in">
    <section id="events" class="events">
        <div class="container" data-aos="fade-up">
            <form action="/manageuser/update/{{$users->id}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$users->id}}"></br>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" required="required" name="name" value="{{$users->name}}"></br>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" required="required" name="email" value="{{$users->email}}"></br>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" required="required" name="password" value="{{$users->password}}"></br>
                </div>
                <div class="form-group">
                    <label for="roles">Roles</label>
                    <input type="text" class="form-control" required="required" name="roles" value="{{$users->roles}}"></br>
                </div>
                <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
            </form>
        </div>
    </section>
</main>
@endsection