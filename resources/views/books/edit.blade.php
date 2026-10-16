@extends('layouts.app')

@section('title',$title)

@section('content')
    <h1>{{ $title }}</h1>

    <form action="{{route('books.update', $book)}}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Judul Buku</label>
            <input type="text" name="title" placeholder="Judul Buku" value="{{$book->title}}">

            @error('title')
                <p>{{ $message}}</p>
            @enderror
        </div>

        <div>
            <label>Author</label>
            <input type="text" name="author" placeholder="Penulis" value="{{$book->author}}">

            @error('author')
                <p>{{ $message}}</p>
            @enderror
        </div>

        <div>
            <label>Year</label>
            <input type="number" name="year" placeholder="Tahun terbit" value="{{$book->year}}">

            @error('year')
                <p>{{ $message}}</p>
            @enderror
        </div>

        <div>
            <label>Stock</label>
            <input type="number" name="stock" placeholder="Jumlah stock" value="{{$book->stock}}">

            @error('stock')
                <p>{{ $message}}</p>
            @enderror
        </div>

        <button type="submit">
            Simpan
        </button>
@endsection
    </form>
