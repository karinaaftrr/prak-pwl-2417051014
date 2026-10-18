@extends('layouts.app')

@section('content')

<div class="form-page">

    <div class="form-heading">

        <span class="page-label">MATA KULIAH</span>

        <h1>Tambah Mata Kuliah</h1>

        <p>
            Tambahkan data mata kuliah baru ke dalam sistem.
        </p>

    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-card">

        <div class="form-card-header">

            <div>
                <h3>Informasi Mata Kuliah</h3>

                <p>
                    Lengkapi informasi mata kuliah di bawah ini.
                </p>
            </div>

            <div class="form-icon">
                +
            </div>

        </div>

        <form
            action="{{ route('matakuliah.store') }}"
            method="POST"
        >

            @csrf

            <div class="form-grid">

                <div class="form-group">

                    <label for="nama_mk">
                        Nama Mata Kuliah
                    </label>

                    <input
                        type="text"
                        id="nama_mk"
                        name="nama_mk"
                        value="{{ old('nama_mk') }}"
                        placeholder="Masukkan nama mata kuliah"
                        required
                    >

                    @error('nama_mk')
                        <span class="text-error" style="color: #e05252; font-size: 11px; margin-top: 4px;">{{ $message }}</span>
                    @enderror

                </div>

                <div class="form-group">

                    <label for="sks">
                        SKS
                    </label>

                    <input
                        type="number"
                        id="sks"
                        name="sks"
                        value="{{ old('sks') }}"
                        placeholder="Masukkan jumlah SKS"
                        min="1"
                        max="6"
                        required
                    >

                    @error('sks')
                        <span class="text-error" style="color: #e05252; font-size: 11px; margin-top: 4px;">{{ $message }}</span>
                    @enderror

                </div>

            </div>

            <div class="form-actions">

                <a
                    href="{{ route('matakuliah.index') }}"
                    class="cancel-button"
                >
                    Batal
                </a>

                <button
                    type="submit"
                    class="save-button"
                >
                    Tambah Mata Kuliah
                </button>

            </div>

        </form>

    </div>

</div>

@endsection