@extends('layout.main')
@section('title', 'Edit Admin')
@section('judul_halaman', 'Edit Admin')

@section('isi')
<div class="card">
    <div class="card-header">
        <h4>Edit Admin</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.update', $admin->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Name</label> <!-- Changed from "Nama" to "Name" -->
                <input type="text" class="form-control" name="name" value="{{ $admin->name }}" required> <!-- Updated to use "name" -->
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="{{ $admin->email }}" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password">
                <small class="form-text text-muted">Leave blank to keep the current password.</small>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
