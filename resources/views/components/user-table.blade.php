<div class="table-card">

    <div class="table-header">

        <div>
            <h3>Daftar Mahasiswa</h3>

            <p>
                Data mahasiswa yang terdaftar dalam sistem
            </p>
        </div>

        <a
            href="{{ route('user.create') }}"
            class="add-button"
        >
            + Tambah Mahasiswa
        </a>

    </div>

    <div class="table-wrapper">

        <table class="student-table">

            <thead>

                <tr>

                    <th>No.</th>

                    <th>Nama</th>

                    <th>NPM</th>

                    <th>Kelas</th>

                    <th>Status</th>

                    <th>Aksi</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($users as $user)

                <tr>

                    <td>
                        {{ $loop->iteration }}
                    </td>

                    <td>

                        <div class="student-name">

                            <div class="avatar">
                                {{ strtoupper(substr($user->nama, 0, 1)) }}
                            </div>

                            <span>
                                {{ $user->nama }}
                            </span>

                        </div>

                    </td>

                    <td>
                        {{ $user->npm }}
                    </td>

                    <td>
                        {{ $user->nama_kelas }}
                    </td>

                    <td>

                        <span class="status">
                            Aktif
                        </span>

                    </td>

                    <td>

                        <div class="action-buttons">

                            <a
                                href="{{ route('user.edit', $user->id) }}"
                                class="edit-button"
                            >
                                Edit
                            </a>

                            <form
                                action="{{ route('user.destroy', $user->id) }}"
                                method="POST"
                                onsubmit="return confirm('Apakah kamu yakin ingin menghapus data mahasiswa ini?')"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="delete-button"
                                >
                                    Hapus
                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>