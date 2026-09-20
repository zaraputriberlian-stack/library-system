<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        $description = 'Selamat datang di aplikasi Sistem Informasi Perpustakaan.';
        $total_books = 5;
        $total_categories = 5;
        $total_members = 5;

        return view('dashboard.index', compact('title', 'description', 'total_books', 'total_categories', 'total_members'));
    }
}