<?php

namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function index()
    {
        $members = [
            'Azzahra Putri Berliana',
            'Giandra',
            'Surahman',
            'Naura E',
            'Alif A'
        ];
        return view('members.index', compact('members'));
    }
}