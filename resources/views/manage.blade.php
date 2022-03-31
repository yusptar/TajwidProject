@extends('admin.master')
@section('content')
<h5 class="card-title">Kelola Data Berita</h5>
        <a href = "/articles/add" class = "btn btn-primary">Tambah Data</a><br><br>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Tanggal Dibuat</th>
                        <th>Tanggal Update</th>
                        <th>Tools</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($article as $art)
                    <tr>
                        <td>{{$art->id}}</td>
                        <td>{{$art->title}}</td>
                        <td>{{$art->created_at}}</td>
                        <td>{{$art->updated_at}}</td>
                        <td>
                            <a href="articles/edit/{{ $art->id }}" class="badge badge-warning">Edit</a>
                            <a href="articles/delete/{{ $art->id }}" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
@endsection