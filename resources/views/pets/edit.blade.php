@extends('dashboard')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">{{ isset($pet) ? 'Edit Hewan Peliharaan' : 'Tambah Hewan Peliharaan' }}</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ isset($pet) ? route('pets.update', $pet) : route('pets.store') }}">
                @csrf
                @if(isset($pet))
                    @method('PUT')
                @endif

                <div class="mb-3">
                    <label class="form-label">Pemilik</label>
                    <select name="owner_id" class="form-select" required>
                        @foreach($owners as $owner)
                            <option value="{{ $owner->id }}" {{ (isset($pet) && $pet->owner_id == $owner->id) ? 'selected' : '' }}>
                                {{ $owner->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Hewan</label>
                    <input type="text" name="name" class="form-control" value="{{ $pet->name ?? '' }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis</label>
                    <input type="text" name="species" class="form-control" value="{{ $pet->species ?? '' }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Ras</label>
                    <input type="text" name="breed" class="form-control" value="{{ $pet->breed ?? '' }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Jenis Kelamin</label>
                    <select name="gender" class="form-select" required>
                        <option value="male" {{ (isset($pet) && $pet->gender == 'male') ? 'selected' : '' }}>Jantan</option>
                        <option value="female" {{ (isset($pet) && $pet->gender == 'female') ? 'selected' : '' }}>Betina</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" name="birth_date" class="form-control" value="{{ $pet->birth_date ?? '' }}" required>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-success">
                        {{ isset($pet) ? 'Perbarui' : 'Simpan' }}
                    </button>
                    <a href="{{ route('pets.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
