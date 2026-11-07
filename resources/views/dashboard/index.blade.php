@extends('layouts.app')
@section('title')
@section('content')

    <h2>{{ $title_app }}</h2>
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
