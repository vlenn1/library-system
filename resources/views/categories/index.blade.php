@extends('layouts.app')
@section('title', $title)
@section('content')

    <h2>{{$title}}</h2>
    <p>{{$description}}</p>
    <ul>
        @foreach($categories as $category)
        <li>{{$category}}</li>
        @endforeach
    </ul>

@endsection
