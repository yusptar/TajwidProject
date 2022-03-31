@extends('admin.master')
@section('content')
<h5 class="card-title">Kelola Data User</h5>
        <a href = "manageuser/add" class = "btn btn-primary">Tambah Data</a><br><br>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Tools</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->roles}}</td>
                        <td>
                            <a href="manageuser/edit/{{ $user->id }}" class="badge badge-warning">Edit</a>
                            <a href="manageuser/delete/{{ $user->id }}" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
@endsection