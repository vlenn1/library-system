@extends('layouts.app')

@section('title',$title)


@section('content')
    <h1>{{ $title }}</h1>

    <form action="{{route('books.store')}}" method="POST">
        @csrf

        <input type="text" name="title" placeholder="Judul Buku">
        <input type="text" name="author" placeholder="Penulis">
        <input type="number" name="year" placeholder="Tahun Terbit">
        <input type="number" name="stock" placeholder="Stok buku">

        <button type="submit">
            Simpan
        </button>
@endsection
    </form>
