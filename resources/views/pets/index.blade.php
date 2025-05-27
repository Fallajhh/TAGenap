@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Hewan Peliharaan</h2>
    <a href="{{ route('pets.create') }}" class="btn btn-success">+ Tambah Hewan</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-primary">
        <tr>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Ras</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Pemilik</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pets as $pet)
        <tr>
            <td>{{ $pet->name }}</td>
            <td>{{ $pet->species }}</td>
            <td>{{ $pet->breed }}</td>
            <td>{{ $pet->gender }}</td>
            <td>{{ $pet->birth_date }}</td>
            <td>{{ $pet->owner->name ?? '-' }}</td>
            <td>
                <a href="{{ route('pets.edit', $pet) }}" class="btn btn-sm btn-warning">Edit</a>
                <form method="POST" action="{{ route('pets.destroy', $pet) }}" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
