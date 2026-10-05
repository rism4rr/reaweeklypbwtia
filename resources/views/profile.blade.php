@extends('layouts.main')

@section('content')

<h1>HALAMAN PROFILE </h1>

<p>Nama : {{ $name }}</p>
<p>NIM : {{ $nim }}</p>
<p>Prodi : {{ $prodi }}</p>

<img src="{{ asset($gambar) }}" width="200" alt="Foto Profile">

@endsection