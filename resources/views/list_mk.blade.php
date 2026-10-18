@extends('layouts.app')

@section('content')

<div class="page-container">

    <div class="page-heading">

        <div>

            <span class="page-label">
                MATA KULIAH
            </span>

            <h1>Daftar Mata Kuliah</h1>

            <p>
                Daftar mata kuliah yang tersedia dalam sistem.
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

    <div class="table-card">

        <div class="table-header">

            <div>

                <h3>
                    Daftar Mata Kuliah
                </h3>

                <p>
                    Data mata kuliah yang tersimpan dalam sistem.
                </p>

            </div>

            <a
                href="{{ route('matakuliah.create') }}"
                class="add-button"
            >
                + Tambah Mata Kuliah
            </a>

        </div>

        <div class="table-wrapper">

            <table class="student-table">

                <thead>

                    <tr>
                        <th>No.</th>
                        <th>ID</th>
                        <th>Nama Mata Kuliah</th>
                        <th>SKS</th>
                        <th>Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse ($mks as $mk)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td class="student-id" style="font-family: monospace; font-size: 11px;">
                            {{ $mk->id }}
                        </td>

                        <td>
                            <strong style="color: #333333;">{{ $mk->nama_mk }}</strong>
                        </td>

                        <td>
                            <span class="status" style="background: #eef2ff; color: #4f46e5;">
                                {{ $mk->sks }} SKS
                            </span>
                        </td>

                        <td>

                            <div class="action-buttons">

                                <a
                                    href="{{ route('matakuliah.edit', $mk->id) }}"
                                    class="edit-button"
                                    title="Edit mata kuliah"
                                >
                                    <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                    <span>Edit</span>
                                </a>

                                <form
                                    action="{{ route('matakuliah.destroy', $mk->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus data mata kuliah {{ $mk->nama_mk }}?')"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="delete-button"
                                        title="Hapus mata kuliah"
                                    >
                                        <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                        <span>Hapus</span>
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="5" style="text-align: center; color: #999999; padding: 30px;">
                            Belum ada data mata kuliah.
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection