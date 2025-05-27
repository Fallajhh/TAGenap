@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="text-center">
        <h1 class="mb-3 display-4 fw-bold text-primary">Selamat Datang di <span class="text-success">Petcarepedia</span></h1>

        @if(Auth::check())
            <p class="lead">Halo, <strong>{{ Auth::user()->name }}</strong> 👋</p>
        @else
            <p class="lead text-danger">Anda belum login. Silakan login untuk melanjutkan.</p>
        @endif

        <p class="mt-3 fs-5 text-muted">
            Kami di sini mendata semua hewan peliharaan Anda, dan dapat merekomendasikan dokter yang cocok 🐾💡
        </p>

        <div class="d-flex justify-content-center gap-3 my-4 flex-wrap">
            <a href="/pets" class="btn btn-outline-primary btn-lg shadow-sm">
                🐶 Kelola Hewan Peliharaan
            </a>
            <a href="/owners" class="btn btn-outline-success btn-lg shadow-sm">
                👤 Kelola Pemilik
            </a>
            <a href="/vets" class="btn btn-outline-info btn-lg shadow-sm">
                🩺 Kelola Dokter Hewan
            </a>
        </div>
    </div>

    <div class="container mt-5">
    <h2 class="mb-4 text-center text-primary">Riwayat Hewan Peliharaan Anda</h2>

    <div class="row justify-content-center g-4">
        {{-- Hewan 1 --}}
        <div class="col-12 col-md-8 mx-auto">
            <div class="card shadow-sm mb-4">
                <img src="{{ asset('storage/pawpaw.jpg') }}" class="card-img-top" alt="Buddy si Anjing" style="height: 250px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Buddy</h5>
                    <p class="card-text">
                        Buddy adalah anjing golden retriever berusia 4 tahun yang ceria dan aktif. Suka bermain bola dan sangat ramah dengan anak-anak.
                    </p>
                    <p class="text-muted mb-0"><small>Jenis: Anjing</small></p>
                </div>
            </div>
        </div>

        {{-- Hewan 2 --}}
        <div class="col-12 col-md-8 mx-auto">
            <div class="card shadow-sm mb-4">
                <img src="{{ asset('storage/cimiw.jpg') }}" class="card-img-top" alt="Mimi si Kucing" style="height: 250px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Mimi</h5>
                    <p class="card-text">   
                        Mimi adalah kucing Persia berusia 3 tahun dengan bulu putih lembut. Suka tidur di tempat hangat dan sangat penyayang.
                    </p>
                    <p class="text-muted mb-0"><small>Jenis: Kucing</small></p>
                </div>
            </div>
        </div>

        {{-- Contoh Hewan 3 --}}
        <div class="col-12 col-md-8 mx-auto">
            <div class="card shadow-sm mb-4">
                <img src="{{ asset('storage/rabit.jpg') }}" class="card-img-top" alt="Ruby si Kelinci" style="height: 250px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Ruby</h5>
                    <p class="card-text">
                        Ruby adalah kelinci Holland Lop berumur 2 tahun dengan bulu coklat lembut. Sangat jinak dan suka dipeluk.
                    </p>
                    <p class="text-muted mb-0"><small>Jenis: Kelinci</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
