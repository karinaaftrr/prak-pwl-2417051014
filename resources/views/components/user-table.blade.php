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

                @forelse ($users as $user)

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
                                title="Edit data mahasiswa"
                            >
                                <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                                <span>Edit</span>
                            </a>

                            <form
                                action="{{ route('user.destroy', $user->id) }}"
                                method="POST"
                                onsubmit="return confirm('Apakah kamu yakin ingin menghapus data mahasiswa {{ $user->nama }}?')"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="delete-button"
                                    title="Hapus data mahasiswa"
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
                    <td colspan="6" style="text-align: center; color: #999999; padding: 30px;">
                        Belum ada data mahasiswa.
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>
