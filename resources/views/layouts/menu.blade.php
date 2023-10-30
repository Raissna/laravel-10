<li class="nav-item">
    <a href="{{ route( 'admin.dashboard') }}"
        class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Dashboard
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route( 'admin.datasiswa') }}"
        class="nav-link {{ Route::currentRouteName() == 'admin.datasiswa' ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-alt"></i>
        <p>
            Data Siswa
        </p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.databuku') }}"
        class="nav-link user{{ Route::currentRouteName() == 'admin.databuku' ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-alt"></i>
        <p>
            Data Buku
        </p>
    </a>
</li>
