@extends('admin.master')
@section('content')
<h5 class="card-title">Kelola Data Nun Sukun</h5>
        <a href = "managenun/addnun" class = "btn btn-primary">Tambah Data</a><br><br>
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
                    @foreach($nunsukun as $nun)
                    <tr>
                        <td>{{$nun->title}}</td>
                        <td>{{$nun->pembimbing}}</td>
                        <td>{{$nun->youtube}}</td>
                        <td>
                            <a href="managenun/editnun/{{ $nun->id }}" class="badge badge-warning">Edit</a>
                            <a href="managenun/deletenun/{{ $nun->id }}" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
@endsection