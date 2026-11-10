@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <form action="{{ route('logout') }}" method="POST" style="margin-bottom: 20px;">
    @csrf
    <button type="submit" style="background-color: red; color: white; border: none; padding: 5px 10px; cursor: pointer;">Logout</button>
    </form>
    @can('manage-users')
    <a href="{{ route('users.index') }}" style="display: inline-block; margin-bottom: 15px; padding: 6px 12px; background-color: #4F53EA; color: white; text-decoration: none; border-radius: 4px;">
        Kelola Pengguna
    </a>
    @endcan

    <h2>Daftar Buku</h2>
    <table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Kategori</th> <!-- Masukkan th Kategori di sini -->
            <th>Tahun Terbit</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->judul }}</td>
                <td>{{ $book->penulis }}</td>
                <td>{{ $book->category?->name ?? 'Belum ada kategori' }}</td> <!-- Samakan urutannya -->
                <td>{{ $book->tahun_terbit }}</td>
                <td>{{ $book->stok }}</td>
                <td>
                    <a href="{{ route('books.edit', $book) }}">Edit</a>
                    <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection