@extends('layouts.app')

@section('content')
<h2>{{ isset($vet) ? 'Edit' : 'Tambah' }} Dokter Hewan</h2>

<form method="POST" action="{{ isset($vet) ? route('vets.update', $vet) : route('vets.store') }}">
    @csrf
    @if(isset($vet)) @method('PUT') @endif

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="name" class="form-control" required value="{{ $vet->name ?? '' }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Spesialisasi</label>
        <input type="text" name="specialization" class="form-control" value="{{ $vet->specialization ?? '' }}">
    </div>

    <div class="mb-3">
        <label class="form-label">No. Telepon</label>
        <input type="text" name="phone" class="form-control" required value="{{ $vet->phone ?? '' }}">
    </div>

    <button type="submit" class="btn btn-primary">{{ isset($vet) ? 'Update' : 'Simpan' }}</button>
</form>
@endsection
