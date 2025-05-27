@extends('layouts.app')

@section('content')
<h2>{{ isset($owner) ? 'Edit' : 'Tambah' }} Pemilik</h2>

<form method="POST" action="{{ isset($owner) ? route('owners.update', $owner) : route('owners.store') }}">
    @csrf
    @if(isset($owner)) @method('PUT') @endif

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="name" class="form-control" required value="{{ $owner->name ?? '' }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea name="address" class="form-control" required>{{ $owner->address ?? '' }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">No. Telepon</label>
        <input type="text" name="phone" class="form-control" required value="{{ $owner->phone ?? '' }}">
    </div>

    <button type="submit" class="btn btn-primary">{{ isset($owner) ? 'Update' : 'Simpan' }}</button>
</form>
@endsection
