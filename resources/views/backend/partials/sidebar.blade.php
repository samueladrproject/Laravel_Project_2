<div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ URL::to('adminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                alt="User Image">
        </div>
        <div class="info">
            <a href="{{ URL::to('dashboard') }}" class="d-block">Administrator</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ URL::to('dashboard') }}" class="nav-link {{ $navLink == 'dashboard' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ URL::to('data-penyakit') }}"
                    class="nav-link {{ $navLink == 'data-penyakit' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-bug"></i>
                    <p>
                        Data Penyakit
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ URL::to('data-gejala') }}"
                    class="nav-link {{ $navLink == 'data-gejala' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-vial"></i>
                    <p>
                        Data Gejala
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ URL::to('data-aturan') }}"
                    class="nav-link {{ $navLink == 'data-aturan' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-recycle"></i>
                    <p>
                        Data Aturan
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ URl::to('data-riwayat') }}"
                    class="nav-link {{ $navLink == 'data-riwayat' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-history"></i>
                    <p>
                        Data Riwayat
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
