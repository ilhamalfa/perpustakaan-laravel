@extends('petugas.layouts.layout-template')

@section('main')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Daftar Buku</h1>
        <a href="{{ url('buku/create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <table class="table table-light" id="dataTable">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Judul</th>
                    <th>Kota</th>
                    <th>Penerbit</th>
                    <th>Stok</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->penulis }}</td>
                    <td>{{ $item->tahun }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->kota }}</td>
                    <td>{{ $item->penerbit }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>
                        {{-- Menggunakan URL --}}
                        {{-- <a href="{{ url('siswa/'. $item->id .'/edit') }}" class="btn btn-warning">Edit</a>  --}}
                        {{-- Menggunakan Route --}}
                        <a href="" class="btn btn-warning">Edit</a> 
                    </td>
                    <td>
                        {{-- Menggunakan route resource --}}
                        <form action="" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection