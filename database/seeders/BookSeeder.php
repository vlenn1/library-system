<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{

    public function run(): void
    {
        Book::create([
            'title' => 'Pemrograman PHP',
            'author' => 'andi',
            'year' => 2024,
            'stock' => 5,
        ]);

        Book::create([
            'title' => 'Atomic Habits',
            'author' => 'James Clear',
            'year' => 2018,
            'stock' => 10,
        ]);

        Book::create([
            'title' => 'Weathering with you',
            'author' => 'Makoto Shinkai',
            'year' => 2019,
            'stock' => 3,
        ]);

        Book::create([
            'title' => 'Your Name',
            'author' => 'Makoto Shinkai',
            'year' => 2016,
            'stock' => 2,
        ]);

        Book::create([
            'title' => 'The Alchemist',
            'author' => 'Paulo',
            'year' => 1988,
            'stock' => 6,
        ]);
    }
}
