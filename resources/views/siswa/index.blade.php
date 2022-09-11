@extends('layout/aplikasi')

@section('konten')
    <a href="/siswa/create" class="btn btn-primary">+Tambah Data Siswa</a>
    <table class="table">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nomor Induk</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>
                        @if ($item->foto)
                            <img style="max-width:50px;max-height:50px" src="{{ url('foto').'/'.$item->foto }}"/>
                        @endif
                    </td>
                    <td>{{ $item->nomor_induk }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>
                        <a class='btn btn-secondary btn-sm' href='{{ url('/siswa/'.$item->nomor_induk) }}'>Detail</a>
                        <a class='btn btn-warning btn-sm' href='{{ url('/siswa/'.$item->nomor_induk.'/edit') }}'>Edit</a>
                        <form onsubmit="return confirm('Yakin mau hapus data?')" class='d-inline' action="{{ '/siswa/'.$item->nomor_induk }}" method='post'>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Del</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
@endsection