<?php

namespace App\Policies;

use App\Models\Book;
use App\Models\User;

class BookPolicy
{
    // Memeriksa izin melihat daftar buku
    public function viewAny(User $user): bool
    {
        return in_array($user->role, ['admin', 'petugas'], true);
    }

    // Memeriksa izin melihat detail buku
    public function view(User $user, Book $book): bool
    {
        return in_array($user->role, ['admin', 'petugas'], true);
    }

    // Memeriksa izin menambah buku baru
    public function create(User $user): bool
    {
        return in_array($user->role, ['admin', 'petugas'], true);
    }

    // Memeriksa izin mengubah data buku
    public function update(User $user, Book $book): bool
    {
        return in_array($user->role, ['admin', 'petugas'], true);
    }

    // Memeriksa izin menghapus data buku
    public function delete(User $user, Book $book): bool
    {
        return in_array($user->role, ['admin', 'petugas'], true);
    }
}