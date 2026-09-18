<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $title = 'Daftar Buku';
        $description = 'Daftar buku yang tersedia di perpustakaan';
        $books = [
            'Atomic Habits' => ['penulis' => 'James Clear', 'tahun_terbit' => '2018'],
            'Frankenstein' => ['penulis' => 'Mary Shelley', 'tahun_terbit' => '1818'],
            'Weathering With you' => ['penulis' => 'Makoto Shinkai', 'tahun_terbit' => '2019'],
            'Your Name' => ['penulis' => 'Makoto Shinkai', 'tahun_terbit' => '2016'],
            'The Alchemist' => ['penulis' => 'Paulo', 'tahun_terbit' => '1988']
        ];
        return view('books.index', compact('title', 'description','books'));
    }

    public function show($id){
        return "Detail Buku <br>ID: " . $id;
    }
}
