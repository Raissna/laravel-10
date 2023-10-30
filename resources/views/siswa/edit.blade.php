@extends('layouts.app')

@section('content')
    <h3>Edit Data</h3>
    <form action="{{ route('admin.updatesiswa') }}" method="POST">
        @csrf
        <div class="row">
            <input type="text" name="id" value="{{ $data->id }}" hidden>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Nama Siswa</label>
                    <input type="text" name="nama_siswa" class="form-control" value="{{ $data->nama_siswa }}">
                </div>

                <div class="form-group">
                    <label for="">No hp</label>
                    <input type="text" name="no_hp" class="form-control" value="{{ $data->no_hp }}">
                </div>

                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="jengkel" class="form-control">
                        <option value="pilih jenis kelamin"></option>
                        <option value="l" {{ $data->jengkel == 'l' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="p" {{ $data->jengkel == 'p' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
        </div>

    </form>
@endsection
