
@extends('layouts.main')

@section('content')

<h1 class="mb-4">Daftar Berita</h1>

@foreach ($beritas as $berita)
    <div class="card mb-3">
        <div class="card-body">
            <h2>
                <a href="/berita/{{ $berita->slug }}"
                   class="text-decoration-none">
                    {{ $berita->judul }}
                </a>
            </h2>

            <h5 class="text-muted">
                Penulis: {{ $berita->penulis }}
            </h5>

            <p>{{ $berita->isi }}</p>
        </div>
    </div>
@endforeach

@endsection