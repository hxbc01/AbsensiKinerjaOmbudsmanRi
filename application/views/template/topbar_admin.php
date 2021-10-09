<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <img src="<?= base_url() ?>/assets/img/logo.png" widht="65" height="65" class="rounded" alt="...">
    <div class="collapse navbar-collapse justify-content-start" id="navbarNavAltMarkup">
    </div>

    <ul class="navbar-nav ml-auto">
        <a class="nav-link dropdown-toggle" href="<?= base_url('Home/index') ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-800">Menu</span>
        </a>
        <li class="nav-item dropdown arrow">
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url("admin/Home_admin/user") ?>">

                    <i class="fas fa-user-edit fa-fw mr-2 text-gray-400"></i>
                    Kelola Account
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url("admin/Home_admin/presensi") ?>">
                    <i class="fas fa-clipboard-check fa-sm fa-fw mr-2 text-gray-400"></i>
                    Rekap Laporan Kehadiran
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url("admin/Laporan_admin/index") ?>">
                    <i class="fas fa-clipboard-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Rekap Laporan Kinerja
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url("Home/index") ?>">
                    <i class="fas fa-home fa-sm fa-fw mr-2 text-gray-400"></i>
                    Home
                </a>

            </div>
        </li>
    </ul>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $users['name']; ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/default.png') ?>">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url("admin/Profile_admin") ?> ">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url("Auth/logout") ?>" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>