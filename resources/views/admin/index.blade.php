@extends('layout.main')
@section('title', 'Data Admin')
@section('judul_halaman', 'Data Admin')

@section('isi')
<div class="row">
    <div class="col-md-9">
        <a href="{{ route('admin.create') }}" class="btn btn-success adds ml-auto"><i class="fa fa-plus"></i> Tambah Admin</a>
    </div>
    <div class="col-md-3">
        <!-- Additional content can go here -->
    </div>
</div>
<div class="card">
    <div class="table-responsive">
        <table id="example1" class="table table-striped table-md">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th> <!-- Changed from "Nama Admin" to "Name" -->
                    <th>Email</th>
                    <th>Password</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td> <!-- Updated to access "name" -->
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->password }}</td> <!-- Handle securely! -->
                    <td class="text-center">
                        <a href="{{ route('admin.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger confirm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
