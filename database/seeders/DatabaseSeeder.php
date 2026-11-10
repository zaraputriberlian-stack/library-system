<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Category;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin Perpustakaan',
                'password' => Hash::make('password123'),
                'role' => 'admin',
            ]
        );

        User::updateOrCreate(
            ['email' => 'petugas@example.com'],
            [
                'name' => 'Petugas Perpustakaan',
                'password' => Hash::make('password123'),
                'role' => 'petugas',
            ]
        );

        $cat1 = Category::updateOrCreate(['name' => 'Pemrograman']);
        $cat2 = Category::updateOrCreate(['name' => 'Manajemen']);
        $cat3 = Category::updateOrCreate(['name' => 'Fiksi']);

        Book::updateOrCreate(
            ['judul' => 'Pemrograman Web Framework'],
            ['penulis' => 'Azzahra', 'tahun_terbit' => 2023, 'stok' => 15, 'category_id' => $cat1->id]
        );
    }
}