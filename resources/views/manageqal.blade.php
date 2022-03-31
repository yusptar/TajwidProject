@extends('admin.master')
@section('content')
<h5 class="card-title">Kelola Data Qalqalah</h5>
        <a href = "manageqal/add" class = "btn btn-primary">Tambah Data</a><br><br>
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
                    @foreach($qalqalah as $qal)
                    <tr>
                        <td>{{$qal->title}}</td>
                        <td>{{$qal->pembimbing}}</td>
                        <td>{{$qal->youtube}}</td>
                        <td>
                            <a href="manageqal/edit/{{ $qal->id }}" class="badge badge-warning">Edit</a>
                            <a href="manageqal/delete/{{ $qal->id }}" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
@endsection