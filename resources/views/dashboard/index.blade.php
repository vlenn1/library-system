@extends('layouts.app')
@section('title')
@section('content')

    <h1>{{ $title_app }}</h1>
    <p>{{ $description_app }}</p>

    <ul>
        <li>Jumlah Buku: {{$jumlah_buku}}</li>
        <li>Jumlah Kategori Buku: {{$jumlah_kategori}}</li>
        @if($jumlah_member >0)
        <li>Jumlah Member: {{$jumlah_member}}</li>
        @else
        <li>Jumlah Member: Belum ada member</li>
        @endif
    </ul>
@endsection
