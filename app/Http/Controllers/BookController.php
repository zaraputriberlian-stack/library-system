<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('category')->get();
        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id); 
        return view('books.show', compact('book', 'id'));
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255|unique:books,judul',
            'penulis' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|min:1900|max:' . date('Y'),
            'stok' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id', // <-- Taruh di dalam array ini
        ], [
            'tahun_terbit.max' => 'Tahun terbit tidak boleh melebihi tahun saat ini.'
        ]);
    Book::create($validated);
    return redirect('/books')->with('success', 'Data buku berhasil ditambahkan!');
    }

    public function edit(Book $book)
    {
        $categories = Category::orderBy('name')->get();
        return view('books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|min:1900|max:' . date('Y'),
            'stok' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id', // <-- Masukkan validasi kategori di sini
        ]);
    $book->update($validated);
    return redirect('/books')->with('success', 'Buku berhasil diupdate!');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/books')->with('success', 'Buku berhasil dihapus!');
    }
}