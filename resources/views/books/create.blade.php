@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h2>Tambah Buku Baru</h2>

    <form action="/books" method="POST">
        @csrf
        <div style="margin-bottom: 15px;">
            <label>Judul Buku</label><br>
            <input type="text" name="judul" value="{{ old('judul') }}">
            @error('judul')
                <div style="color: red; font-size: 13px;">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label>Penulis</label><br>
            <input type="text" name="penulis" value="{{ old('penulis') }}">
            @error('penulis')
                <div style="color: red; font-size: 13px;">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label>Tahun Terbit</label><br>
            <input type="number" name="tahun_terbit" value="{{ old('tahun_terbit') }}">
            @error('tahun_terbit')
                <div style="color: red; font-size: 13px;">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-bottom: 15px;">
            <label>Stok</label><br>
            <input type="number" name="stok" value="{{ old('stok') }}">
            @error('stok')
                <div style="color: red; font-size: 13px;">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Simpan Data</button>
    </form>
@endsection