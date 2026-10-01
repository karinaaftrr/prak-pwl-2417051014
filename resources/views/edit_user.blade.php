@extends('layouts.app')

@section('content')

<div class="form-page">

    <div class="form-heading">

        <span class="page-label">MANAJEMEN MAHASISWA</span>

        <h1>Edit Data Mahasiswa</h1>

        <p>
            Perbarui informasi mahasiswa yang terdaftar dalam sistem.
        </p>

    </div>

    <div class="form-card">

        <div class="form-card-header">

            <div>
                <h3>Informasi Mahasiswa</h3>

                <p>
                    Perbarui informasi mahasiswa di bawah ini.
                </p>
            </div>

            <div class="form-icon">
                ✎
            </div>

        </div>

        <form
            action="{{ route('user.update', $user->id) }}"
            method="POST"
        >

            @csrf
            @method('PUT')

            <div class="form-grid">

                <div class="form-group">

                    <label for="nama">
                        Nama Lengkap
                    </label>

                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        value="{{ $user->nama }}"
                        placeholder="Masukkan nama lengkap"
                        required
                    >

                </div>

                <div class="form-group">

                    <label for="npm">
                        NPM
                    </label>

                    <input
                        type="text"
                        id="npm"
                        name="npm"
                        value="{{ $user->npm }}"
                        placeholder="Masukkan NPM"
                        required
                    >

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

                        <option value="" disabled>
                            Pilih kelas
                        </option>

                        @foreach ($kelas as $kelasItem)

                            <option
                                value="{{ $kelasItem->id }}"
                                {{ $user->kelas_id == $kelasItem->id ? 'selected' : '' }}
                            >
                                {{ $kelasItem->nama_kelas }}
                            </option>

                        @endforeach

                    </select>

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
                    Simpan Perubahan
                </button>

            </div>

        </form>

    </div>

</div>

@endsection