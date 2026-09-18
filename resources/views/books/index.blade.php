@extends('layouts.app')
@section('title', $title)
@section('content')

    <h2>{{ $title }}</h2>
    <p>{{ $description }}</p>
    <ul>
        @foreach($books as $title => $book)
        <li>{{$title}} - {{$book['penulis']}} - {{$book['tahun_terbit']}}</li>
        @endforeach
    </ul>

@endsection
