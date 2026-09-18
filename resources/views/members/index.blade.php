@extends('layouts.app')
@section('title')
@section('content')

    <h2>{{ $title }}</h2>
    <p>{{ $description }}</p>
    <ul>
        @foreach($members as $member)
        <li>{{$member}}</li>
        @endforeach
    </ul>
@endsection
