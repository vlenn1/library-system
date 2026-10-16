@extends('layouts.app')

@section('title',$title)


@section('content')
    <h1>{{ $title }}</h1>

    <form action="{{route('books.store')}}" method="POST">
        @csrf

        <div>
            <label>Judul Buku</label>
            <input type="text" name="title" placeholder="Judul Buku" value="{{ old('title') }}">

            @error('title')
                <p>{{ $message}}</p>
            @enderror
        </div>

        <div>
            <label>Author</label>
            <input type="text" name="author" placeholder="Penulis" value="{{ old('author') }}">

            @error('author')
                <p>{{ $message}}</p>
            @enderror
        </div>

        <div>
            <label>Year</label>
            <input type="number" name="year" placeholder="Tahun terbit" value="{{ old('year') }}">

            @error('year')
                <p>{{ $message}}</p>
            @enderror
        </div>

        <div>
            <label>Stock</label>
            <input type="number" name="stock" placeholder="Jumlah stock" value="{{ old('stock') }}">

            @error('stock')
                <p>{{ $message}}</p>
            @enderror
        </div>

        <button type="submit">
            Simpan
        </button>
@endsection
    </form>
