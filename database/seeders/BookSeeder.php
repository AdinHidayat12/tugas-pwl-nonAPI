<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::insert([
            [
                'title' => 'Bumi Masia',
                'author' => 'pramoedya',
                'year' => 1978,
                'publisher' => 'Gramedia',
                'city' => 'Jakarta',
                'cover' => null,
                'quantity' => 0,
                'bookshelf_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'Jejak Langkah',
                'author' => 'pramoedya',
                'year' => 1987,
                'publisher' => 'Gramedia',
                'city' => 'Jakarta',
                'cover' => null,
                'quantity' => 0,
                'bookshelf_id' => 2,
                'created_at' => now(),
            ],
            [
                'title' => 'Rumah Kaca',
                'author' => 'pramoedya',
                'year' => 1987,
                'publisher' => 'Gramedia',
                'city' => 'Jakarta',
                'cover' => null,
                'quantity' => 0,
                'bookshelf_id' => 3,
                'created_at' => now(),
            ],
            [
                'title' => 'Tetralogi Pulau Buru',
                'author' => 'pramoedya',
                'year' => 1954,
                'publisher' => 'Gramedia',
                'city' => 'Jakarta',
                'cover' => null,
                'quantity' => 0,
                'bookshelf_id' => 1,
                'created_at' => now(),
            ],
            [
                'title' => 'Cerita dari blora',
                'author' => 'Pramoedya',
                'year' => 1964,
                'publisher' => 'Gramedia',
                'city' => 'Jakarta',
                'cover' => null,
                'quantity' => 0,
                'bookshelf_id' => 2,
                'created_at' => now(),
            ],
        ]);
    }
}
