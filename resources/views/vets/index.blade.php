@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Dokter Hewan</h2>
    <a href="{{ route('vets.create') }}" class="btn btn-success">+ Tambah Dokter</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-primary">
        <tr>
            <th>Nama</th>
            <th>Spesialisasi</th>
            <th>No. Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($vets as $vet)
        <tr>
            <td>{{ $vet->name }}</td>
            <td>{{ $vet->specialization }}</td>
            <td>{{ $vet->phone }}</td>
            <td>
                <a href="{{ route('vets.edit', $vet) }}" class="btn btn-sm btn-warning">Edit</a>
                <form method="POST" action="{{ route('vets.destroy', $vet) }}" class="d-inline">
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
