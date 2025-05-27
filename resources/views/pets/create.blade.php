@extends('layouts.app')

@section('content')
<h2>Tambah Hewan Peliharaan</h2>

<form method="POST" action="{{ route('pets.store') }}">
    @csrf

    <div class="mb-3">
        <label class="form-label">Pemilik</label>
        <select class="form-select" name="owner_id" required>
            @foreach($owners as $owner)
                <option value="{{ $owner->id }}">{{ $owner->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Nama Hewan</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Jenis</label>
        <input type="text" name="species" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Ras</label>
        <input type="text" name="breed" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <select name="gender" class="form-control">
            <option value="male">Jantan</option>
            <option value="female">Betina</option>
    </select>

    </div>

    <div class="mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <input type="date" name="birth_date" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
