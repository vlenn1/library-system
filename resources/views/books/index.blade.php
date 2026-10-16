@extends('layouts.app')
@section('title', $title)


@section('content')
    @if (session('success'))
        <p>{ {session('success')} }</p>
    @endif

    <h2>{{ $title }}</h2>

    <a href="{{ route('books.create') }}">Tambah Buku</a>
    
    <ol>
        @foreach($books as $title => $book)
            <li>
                <h3>{{ $book->title }}</h3>
                <a href="{{ route('books.show', $book->id) }}">Detail Buku</a>
                <a href="{{ route('books.edit', $book, 'edit') }}">Edit Buku</a>
                <form action="{{ route('books.destroy',$book) }}" method="POST">

                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus Data</button>
                </form>
            </li>
        @endforeach
    </ol>
@endsection
