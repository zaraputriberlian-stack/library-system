@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>{{ $title }}</h2>
    <p>{{ $description }}</p>
    <ul>
        <li>Total Buku: {{ $total_books }}</li>
        <li>Total Kategori: {{ $total_categories }}</li>
        <li>Total Member: {{ $total_members }}</li>
    </ul>
@endsection