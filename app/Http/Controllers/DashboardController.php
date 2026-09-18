<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $title_app = 'Library System';
        $description_app = 'Aplikasi Perpustakaan Digital';
        $jumlah_buku = 5;
        $jumlah_member = 5;
        $jumlah_kategori = 5;

        return view('dashboard.index', compact('title_app', 'description_app', 'jumlah_buku', 'jumlah_member', 'jumlah_kategori'));
    }
}
