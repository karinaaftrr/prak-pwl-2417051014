@extends('layouts.app')

@section('content')

<div class="page-container">

    <div class="page-heading">

        <div>
            <span class="page-label">MANAJEMEN MAHASISWA</span>

            <h1>Manajemen Mahasiswa</h1>

            <p>
                Kelola data mahasiswa yang terdaftar pada sistem.
            </p>
        </div>

    </div>

    @if (session('success'))
        <div class="alert alert-success">
            <div class="alert-content">
                <svg class="alert-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>{{ session('success') }}</span>
            </div>
            <button type="button" class="alert-close" onclick="this.parentElement.remove()" title="Tutup">&times;</button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            <div class="alert-content">
                <svg class="alert-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>{{ session('error') }}</span>
            </div>
            <button type="button" class="alert-close" onclick="this.parentElement.remove()" title="Tutup">&times;</button>
        </div>
    @endif

    <x-user-table :users="$users" />

</div>

@endsection
