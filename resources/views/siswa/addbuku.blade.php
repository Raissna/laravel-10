@extends('layouts.app')

@section('content')
    <h3>tambah buku</h3>
    <form action="{{ route('admin.buat') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">nama buku</label>
                    <input type="text" name="nama_buku" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">jumlah halaman</label>
                    <input type="text" name="jml_hal" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">penerbit</label>
                    <input type="text" name="penerbit" class="form-control">
                </div>

                
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
        </div>

    </form>
@endsection
