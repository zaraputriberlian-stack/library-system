@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h2>Edit Data Buku</h2>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label>Judul Buku</label><br>
        <input type="text" name="judul" value="{{ $book->judul }}"><br><br>

        <label>Penulis</label><br>
        <input type="text" name="penulis" value="{{ $book->penulis }}"><br><br>

        <label>Tahun Terbit</label><br>
        <input type="number" name="tahun_terbit" value="{{ $book->tahun_terbit }}"><br><br>

        <label>Stok</label><br>
        <input type="number" name="stok" value="{{ $book->stok }}"><br><br>

        <button type="submit">Update</button>
    </form>
@endsection