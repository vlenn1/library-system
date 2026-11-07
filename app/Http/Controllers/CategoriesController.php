<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $title = 'Daftar Kategori Buku';
        $categories = [
            'Business',
            'Self-Improvement',
            'Computer Science',
            'Novel',
            'Comic'
        ];

        return view('categories.index', compact('title','categories'));
    }
}
