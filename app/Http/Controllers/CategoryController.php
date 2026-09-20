<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = [
            'Pemrograman Web',
            'Jaringan Komputer',
            'Business Intelligence',
            'Data Science',
            'Analisis Sistem'
        ];
        return view('categories.index', compact('categories'));
    }
}