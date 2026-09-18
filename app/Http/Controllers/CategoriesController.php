<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $title = 'Daftar Kategori Buku';
        $description = 'List Kategori buku yang tersedia';
        $categories = [
            'Business',
            'Self-Improvement',
            'Computer Science',
            'Novel',
            'Comic'
        ];

        return view('categories.index', compact('title','description','categories'));
    }
}
