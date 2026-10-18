<nav class="navbar-custom">

    <div class="navbar-brand">

        <div class="brand-icon">
            P
        </div>

        <div>
            <h5>PWL</h5>
            <span>Praktikum Pemrograman Web Lanjut</span>
        </div>

    </div>

    <div class="navbar-menu">

        <a
            href="{{ route('user.index') }}"
            class="nav-item {{ request()->is('user*') ? 'active' : '' }}"
        >
            Data Mahasiswa
        </a>

        <a
            href="{{ route('matakuliah.index') }}"
            class="nav-item {{ request()->is('matakuliah*') || request()->is('mata-kuliah*') ? 'active' : '' }}"
        >
            Mata Kuliah
        </a>

        <a
            href="{{ route('user.create') }}"
            class="nav-item"
        >
            + Tambah Mahasiswa
        </a>

        <a
            href="{{ route('matakuliah.create') }}"
            class="nav-item"
        >
            + Tambah Mata Kuliah
        </a>

    </div>

</nav>
