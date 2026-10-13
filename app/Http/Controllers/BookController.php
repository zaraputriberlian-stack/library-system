<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all(); 

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id); 

        return view('books.show', compact('book', 'id'));
    }
    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255|unique:books,judul',
            'penulis' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|min:1900|max:' . date('Y'),
            'stok' => 'required|integer|min:0',
        ], [
            'judul.unique' => 'Buku dengan judul ini sudah terdaftar di sistem.',
            'tahun_terbit.max' => 'Tahun terbit tidak boleh melebihi tahun saat ini.'
        ]);

        Book::create($validated);

        return redirect('/books')->with('success', 'Data buku berhasil ditambahkan!');
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $book->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tahun_terbit' => $request->tahun_terbit,
            'stok' => $request->stok,
        ]);
        return redirect('/books')->with('success', 'Buku berhasil diupdate!');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/books')->with('success', 'Buku berhasil dihapus!');
    }
}