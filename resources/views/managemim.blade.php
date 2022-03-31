@extends('admin.master')
@section('content')
<h5 class="card-title">Kelola Data Mim Sukun</h5>
        <a href = "managemim/addmim" class = "btn btn-primary">Tambah Data</a><br><br>
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
                    @foreach($mimsukun as $mim)
                    <tr>
                        <td>{{$mim->title}}</td>
                        <td>{{$mim->pembimbing}}</td>
                        <td>{{$mim->youtube}}</td>
                        <td>
                            <a href="managemim/editmim/{{ $mim->id }}" class="badge badge-warning">Edit</a>
                            <a href="managemim/deletemim/{{ $mim->id }}" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
@endsection