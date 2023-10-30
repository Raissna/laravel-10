@extends('layouts.app')

@section('content')
    <a href="{{ route('admin.addbuku') }}" class="btn btn-primary mb-3">Tambah Buku</a>
    <table class="table table-bordered">

        <tr>
            <th>no</th>
            <th>nama buku</th>
            <th>jumlah halaman</th>
            <th>penerbit</th>
            <th>aksi</th>
        </tr>
        <?php $no = 1; ?>
        @foreach ($data as $d)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $d->nama_buku }}</td>
                <td>{{ $d->jml_hal }}</td>
                <td>{{ $d->penerbit}}</td>
                <td>
                    <a href="{{ route('admin.mengubah', ['id' => $d->id]) }}" class="btn btn-info">edit</a>
                    <a href="{{ route('admin.hapus', ['id' => $d->id]) }}" class="btn btn-danger">delete</a>
                </td>
            </tr>
        @endforeach

    </table>

    
@endsection
