
@extends('layouts.main')

@section('content')

<div class="text-center">
    <h1>{{ $singelnews->judul }}</h1>
    <h5>{{ $singelnews->penulis }}</h5>
</div>

<div class="mt-4">
    <p>{{ $singelnews->isi }}</p>
</div>

<a href="/berita" class="btn btn-primary mt-3">
    Kembali ke berita
</a>

@endsection