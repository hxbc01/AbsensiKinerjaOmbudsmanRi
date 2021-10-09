<body>
    <div class="row justify-content-center mt-3">
        <img src="<?= base_url() ?>/assets/img/logo.png" widht="100" height="100" class="rounded" alt="...">
    </div>
    <div class="d-sm-flex align-items-center justify-content-center mt-3 pt-5">
        <div class="col-sm-3 col-md-2 mb-2 mt-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-auto">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                Rekam Kehadiran</div> <br>
                            <a href="<?= base_url("Home/presensi") ?>" class="btn btn-primary btn-sm">disini</a>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-sign-in-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-md-2 mb-2 mt-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-auto">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                Laporan Kinerja</div> <br>
                            <a href="<?= base_url("Laporan_kinerja/index") ?>" class="btn btn-primary btn-sm">disini</a>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-md-2 mb-2 mt-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-auto">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                Daftar Kehadiran</div> <br>
                            <a href="<?= base_url("Home/kehadiran") ?>" class="btn btn-primary btn-sm">disini</a>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>