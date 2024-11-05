@extends('layout.main')
@section('title', 'Tambah Admin')
@section('judul_halaman', 'Tambah Admin')

@section('isi')
<div class="card">
    <div class="card-header">
        <h4>Tambah Admin</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Name</label> <!-- Changed from "Nama" to "Name" -->
                <input type="text" class="form-control" name="name" required> <!-- Updated to use "name" -->
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
