<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['judul' => 'Pemrograman Web Framework', 'penulis' => 'M. Arfa', 'tahun' => 2023],
            ['judul' => 'Belajar Big Data', 'penulis' => 'Azzahra', 'tahun' => 2022],
            ['judul' => 'Dasar-dasar Blockchain', 'penulis' => 'Berlian P', 'tahun' => 2024],
            ['judul' => 'Sistem Informasi Manajemen', 'penulis' => 'Wulan', 'tahun' => 2021],
            ['judul' => 'Etika Profesi', 'penulis' => 'Fitri W', 'tahun' => 2023]
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}