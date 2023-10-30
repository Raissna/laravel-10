@extends('layouts.app')

@section('content')
    <h3>tambah siswa</h3>
    <form action="{{ route('admin.insertsiswa') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="">Nama Siswa</label>
                    <input type="text" name="nama_siswa" class="form-control" value="{{ old('nama_siswa') }}">
                    @error('nama_siswa')
                        {{ $message }}
                    @enderror
                </div>
            

                <div class="form-group">
                    <label for="">No hp</label>
                    <input type="text" name="no_hp" class="form-control" value="{{ old('no_hp') }}">
                    @error('no_hp')
                        {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="jenkel" class="form-control">
                        <option value=>"pilih jenis kelamin"</option>
                        <option value="l">Laki-laki</option>
                        <option value="p">Perempuan</option>
                    </select>
                    @error('jenkel')
                        {{ $message }}
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
        </div>

    </form>
@endsection
