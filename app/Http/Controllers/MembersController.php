<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index(){
        $title = 'Daftar Anggota Perpustakaan';
        $description = 'List Anggota Perpustakaan';
        $members = [
            'Hera',
            'Michele',
            'Chloe',
            'chaewon',
            'Mina'
        ];
        return view('members.index', compact('title','description','members'));
    }
}
