<nav class="navbar-custom">

    <div class="navbar-brand">

        <div class="brand-icon">
            P
        </div>

        <div>
            <h5>PWL</h5>
            <span>Manajemen Mahasiswa</span>
        </div>

    </div>

    <div class="navbar-menu">

        <a
            href="{{ route('user.index') }}"
            class="nav-item active"
        >
            Beranda
        </a>

        <a
            href="{{ route('user.index') }}"
            class="nav-item"
        >
            Data Mahasiswa
        </a>

        <a
            href="{{ route('user.create') }}"
            class="nav-item"
        >
            Tambah Mahasiswa
        </a>

    </div>

</nav>