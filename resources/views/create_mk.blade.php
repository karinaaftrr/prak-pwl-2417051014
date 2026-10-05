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
                        placeholder="Masukkan nama mata kuliah"
                        required
                    >

                </div>

                <div class="form-group">

                    <label for="sks">
                        SKS
                    </label>

                    <input
                        type="number"
                        id="sks"
                        name="sks"
                        placeholder="Masukkan jumlah SKS"
                        min="1"
                        max="6"
                        required
                    >

                </div>

            </div>

            <div class="form-actions">

                <a
                    href="{{ url('/matakuliah') }}"
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