@extends('layouts.app')

@section('content')

<div class="page-container">

    <div class="page-heading">

        <div>
            <span class="page-label">Pemogramman Web Lanjut</span>

            <h1>Manajement Mahasiswa</h1>

            <p>
                Kelola data mahasiswa yang terdaftar pada sistem.
            </p>
        </div>

    </div>

    <x-user-table :users="$users" />

</div>

@endsection