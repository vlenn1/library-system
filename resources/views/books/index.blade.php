@extends('layouts.app')
@section('title', $title)
@section('content')

    <h2>{{ $title }}</h2>
    <p>{{ $description }}</p>
    <ol>
        @foreach($books as $title => $book)
        <li><h3>{{ $book->title }}</h3></li>
        <p>Penulis: {{$book->author}}</p>
        <p>Tahun: {{$book->year}}</p>
        <p>Stok buku: {{$book->stock}}</p>
        @endforeach
    </ol>

@endsection
