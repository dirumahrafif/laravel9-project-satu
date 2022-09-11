@extends('layout/aplikasi')

@section('konten')    
<h1>{{ $judul }}</h1>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus corporis architecto quia. Ipsum adipisci magnam ex, eaque a omnis dolorem!</p>
<p>
    <ul>
        <li>Email: {{ $kontak['email']}}</li>
        <li>YouTube: {{ $kontak['youtube']}}</li>
    </ul>
</p>
@endsection
    