@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Pemilik</h2>
    <a href="{{ route('owners.create') }}" class="btn btn-success">+ Tambah Pemilik</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-primary">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($owners as $owner)
        <tr>
            <td>{{ $owner->name }}</td>
            <td>{{ $owner->address }}</td>
            <td>{{ $owner->phone }}</td>
            <td>
                <a href="{{ route('owners.edit', $owner) }}" class="btn btn-sm btn-warning">Edit</a>
                <form method="POST" action="{{ route('owners.destroy', $owner) }}" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
