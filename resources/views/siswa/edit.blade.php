@extends('layout/aplikasi')

@section('konten')
    <a href='/siswa' class="btn btn-secondary"><< Kembali</a>
    <form method="post" action="{{ '/siswa/'.$data->nomor_induk }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <h1>Nomor Induk: {{ $data->nomor_induk }}</h1>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name='nama' id="nama" value="{{ $data->nama }}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat">{{ $data->alamat }}</textarea>
        </div>
        @if ($data->foto)
            <div class="mb-3">
                <img style="max-width:50px;max-height:50px" src="{{ url('foto').'/'.$data->foto }}"/>
            </div>
        @endif
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto" id="foto">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
    </form>
@endsection