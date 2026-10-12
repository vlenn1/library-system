@extends('layouts.app')
@section('title', $title)
@section('content')

    <h2>{{ $title }}</h2>

    <a href="{{ route('books.create') }}">Tambah Buku</a>
    <ol>
        <li><h3>{{ $book->title }}</h3></li>
        <p>Penulis: {{$book->author}}</p>
        <p>Tahun: {{$book->year}}</p>
        <p>Stok buku: {{$book->stock}}</p>
    </ol>

@endsection
