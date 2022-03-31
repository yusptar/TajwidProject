@extends('admin.master')
@section('content')
<h5 class="card-title">Kelola Data Mad</h5>
        <a href = "managemad/add" class = "btn btn-primary">Tambah Data</a><br><br>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Nama Pembimbing</th>
                        <th>Source Youtube</th>
                        <th>Tools</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mad as $m)
                    <tr>
                        <td>{{$m->title}}</td>
                        <td>{{$m->pembimbing}}</td>
                        <td>{{$m->youtube}}</td>
                        <td>
                            <a href="managemad/edit/{{ $m->id }}" class="badge badge-warning">Edit</a>
                            <a href="managemad/delete/{{ $m->id }}" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
@endsection