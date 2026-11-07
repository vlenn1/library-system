<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Gate;

class BookController extends Controller
{

    public function index()
    {
        $title = 'Daftar Buku';
        $books = Book::with('category')->get();
        
        return view('books.index', compact('books','title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Menambahkan Buku';
        $categories = Category::orderBy('name')->get();

        return view('books.create', compact('categories','title'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|digits:4|max:' . date('Y'),
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        Book::create($validated);

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $title = "Detail Buku";
        $books = Book::with('category')->get();
        return view('books.show', compact('title', 'book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $title = 'Edit Buku';
        $categories = Category::orderBy('name')->get();

        return view('books.edit', compact('book','categories','title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $update_validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|digits:4|max:' . date('Y'),
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        $book -> update($update_validated);

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        Gate::authorize('delete', $book);
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus');

    }
}
