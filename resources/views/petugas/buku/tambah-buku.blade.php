@extends('petugas.layouts.layout-template')

@section('main')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Buku Baru</h1>
    </div>
    
    {{-- 1. Menggunakan Route --}}
    {{-- <form action="{{ route('siswa.store') }}" method="POST"> --}}

    {{-- 2. Menggunakan URL --}}
    <form action="{{ url('buku') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Penulis</label>
            <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="penulis" name="penulis" placeholder="Penulis" value="{{ old('penulis') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tahun</label>
            <input type="number" class="form-control @error('tahun') is-invalid @enderror" id="tahun" name="tahun" placeholder="Tahun" value="{{ old('tahun') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Judul</label>
            <input type=