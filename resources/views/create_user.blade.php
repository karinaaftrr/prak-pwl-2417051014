@extends('layouts.app')

@section('content')

<div class="form-page">

    <div class="form-heading">
        <span class="page-label">MANAJEMEN MAHASISWA</span>

        <h1>Tambah Mahasiswa</h1>

        <p>
            Tambahkan data mahasiswa baru ke dalam sistem.
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
                <h3>Informasi Mahasiswa</h3>
                <p>Lengkapi informasi mahasiswa di bawah ini.</p>
            </div>

            <div class="form-icon">
                +
            </div>
        </div>

        <form action="{{ route('user.store') }}" method="POST">

            @csrf

            <div class="form-grid">

                <div class="form-group">
                    <label for="nama">
                        Nama Lengkap
                    </label>

                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        value="{{ old('nama') }}"
                        placeholder="Masukkan nama lengkap"
                        required
                    >

                    @error('nama')
                        <span class="text-error" style="color: #e05252; font-size: 11px; margin-top: 4px;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="npm">
                        NPM
                    </label>

                    <input
                        type="text"
                        id="npm"
                        name="npm"
                        value="{{ old('npm') }}"
                        placeholder="Masukkan NPM"
                        required
                    >

                    @error('npm')
                        <span class="text-error" style="color: #e05252; font-size: 11px; margin-top: 4px;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group full-width">
                    <label for="kelas_id">
                        Kelas
                    </label>

                    <select
                        name="kelas_id"
                        id="kelas_id"
                        required
                    >
                        <option value="" disabled {{ old('kelas_id') ? '' : 'selected' }}>
                            Pilih kelas
                        </option>

                        @foreach ($kelas as $kelasItem)

                            <option
                                value="{{ $kelasItem->id }}"
                                {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}
                            >
                                {{ $kelasItem->nama_kelas }}
                            </option>

                        @endforeach

                    </select>

                    @error('kelas_id')
                        <span class="text-error" style="color: #e05252; font-size: 11px; margin-top: 4px;">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <div class="form-actions">

                <a
                    href="{{ route('user.index') }}"
                    class="cancel-button"
                >
                    Batal
                </a>

                <button
                    type="submit"
                    class="save-button"
                >
                    Tambah Mahasiswa
                </button>

            </div>

        </form>

    </div>

</div>

@endsection
