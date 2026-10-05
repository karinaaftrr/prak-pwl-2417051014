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
                    </tr>

                </thead>

                <tbody>

                    @foreach ($mks as $mk)

                    <tr>

                        <td>
                            {{ $loop->iteration }}
                        </td>

                        <td>
                            {{ $mk->id }}
                        </td>

                        <td>
                            {{ $mk->nama_mk }}
                        </td>

                        <td>
                            {{ $mk->sks }}
                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection