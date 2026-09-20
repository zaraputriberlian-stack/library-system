@extends('layouts.app')

@section('title', 'Daftar Anggota')

@section('content')
    <h2>Daftar Anggota</h2>
    <ol>
        @foreach($members as $member)
            <li>{{ $member }}</li>
        @endforeach
    </ol>
@endsection