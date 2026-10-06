<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Book::insert([
            ['judul' => 'Pemrograman Web Framework', 'penulis' => 'Budi S.', 'tahun_terbit' => 2023, 'stok' => 15],
            ['judul' => 'Belajar Database MySQL', 'penulis' => 'Andi M.', 'tahun_terbit' => 2022, 'stok' => 10],
            ['judul' => 'Dasar-dasar Python', 'penulis' => 'Siti A.', 'tahun_terbit' => 2024, 'stok' => 5],
            ['judul' => 'Sistem Informasi Manajemen', 'penulis' => 'Rina W.', 'tahun_terbit' => 2021, 'stok' => 20],
            ['judul' => 'Algoritma dan Struktur Data', 'penulis' => 'Eko P.', 'tahun_terbit' => 2023, 'stok' => 8]
        ]);
    }
}