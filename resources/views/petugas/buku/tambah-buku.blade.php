@extends('petugas.layouts.layout-template')

@section('main')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Buku Baru</h1>
    </div>
    
    {{-- 1. Menggunakan Route --}}
    {{-- <form action="{{ route('siswa.store') }}" method="POST"> --}}

    {{-- 2. Menggunakan URL --}}
    <form action="{{ url('buku') }}" method="POST" enctype="multipart/form-data">
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
            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" placeholder="Judul" value="{{ old('judul') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Kota</label>
            <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota" name="kota" placeholder="Kota" value="{{ old('kota') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Penerbit</label>
            <input type="text" class="form-control @error('penerbit') is-invalid @enderror" id="penerbit" name="penerbit" placeholder="Penerbit" value="{{ old('penerbit') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Cover</label>
            <input type="file" class="form-control @error('penerbit') is-invalid @enderror" name="cover" id="cover">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Sinopsis</label>
            <input type="text" class="form-control @error('sinopsis') is-invalid @enderror" id="sinopsis" name="sinopsis" placeholder="Sinopsis" value="{{ old('sinopsis') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Stok</label>
            <input type="number" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" placeholder="stok" value="{{ old('stok') }}">
        </div>
        <button type="submit" class="btn btn-primary">Input Data Siswa</button>
    </form>

@endsection