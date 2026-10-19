@extends('layouts.app')

@section('title', $movie->title)

@section('content')
    <div class="container my-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('movies.index') }}">Beranda</a></li>
                <li class="breadcrumb-item active">{{ $movie->title }}</li>
            </ol>
        </nav>

        <div class="card shadow-sm">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/' . $movie->poster) }}"
                         class="img-fluid rounded-start w-100" alt="Poster {{ $movie->title }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title">{{ $movie->title }}</h2>
                        <span class="badge text-bg-warning mb-3">{{ $movie->genre }}</span>

                        <table class="table table-sm w-auto">
                            <tr><th class="pe-4">Genre</th><td>{{ $movie->genre }}</td></tr>
                            <tr><th class="pe-4">Durasi</th><td>{{ $movie->duration }} menit</td></tr>
                            <tr><th class="pe-4">Tahun Rilis</th><td>{{ $movie->release_year }}</td></tr>
                        </table>

                        <h5>Sinopsis</h5>
                        <p>{{ $movie->description }}</p>

                        <a href="{{ route('movies.index') }}" class="btn btn-secondary">&laquo; Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
