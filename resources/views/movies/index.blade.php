@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    {{-- Hero --}}
    <section class="bg-dark text-white text-center py-5">
        <div class="container py-4">
            <p class="text-uppercase text-warning mb-1">Welcome To</p>
            <h1 class="display-4 fw-bold">Daftar Film</h1>
            <p class="lead mb-0">Katalog film pilihan: sci-fi, action, drama, dan animasi.</p>
            <small class="text-secondary">NIM: 251011700387 &bull; Prodi Sistem Informasi &bull; Dosen: Afif Efendi</small>
        </div>
    </section>

    {{-- Grid card film --}}
    <section class="container my-5" id="daftar">
        <h2 class="h4 mb-4">Semua Film ({{ $movies->count() }})</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
            @forelse ($movies as $movie)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('assets/images/' . $movie->poster) }}"
                             class="card-img-top" alt="Poster {{ $movie->title }}">
                        <div class="card-body">
                            <h5 class="card-title mb-1">{{ $movie->title }}</h5>
                            <span class="badge text-bg-warning">{{ $movie->genre }}</span>
                            <p class="card-text text-muted small mt-2 mb-0">
                                {{ $movie->release_year }} &bull; {{ $movie->duration }} menit
                            </p>
                        </div>
                        <div class="card-footer bg-white border-0 pb-3">
                            <a href="{{ route('movies.show', $movie) }}" class="btn btn-primary btn-sm w-100">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info">Belum ada data. Jalankan <code>php artisan migrate --seed</code>.</div>
                </div>
            @endforelse
        </div>
    </section>
@endsection
