<div class="row justify-content-center ml-4 mt-4">
    <div class="row-md-8">
        <h3>Rekam Kehadiran Keasistenan</h3>
        <?= $this->session->flashdata('message'); ?>
    </div>
    <div class="col-md-11">
        <a href="<?= base_url("Home/izin") ?>" class="btn btn-info float-right">
            <i class="fas fa-envelope"></i>
            Surat Izin & Sakit
            </i>
        </a>
    </div>
</div>
<div class="row justify-content-center mt-4">
    <div class="card shadow" style="width: 90%;">
        <div class="row justify-content mt-3">
            <div class="row-ml-4">
                <a href="<?= base_url("Home/index") ?>" class="btn btn-primary btn-circle btn-lg">
                    <i class="fas fa-arrow-circle-left"></i>
                </a>
            </div>
        </div>
        <div class="card-body">

            <form action="<?= base_url('Kehadiran/presensi') ?>" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nama</label>
                        <input type="text" class="form-control" id="inputEmail4" name="nama" value="<?= $users['name']; ?>" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">NIO</label>
                        <input type="text" class="form-control" id="inputPassword4" name="nip" value="<?= $users['nip']; ?>" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Keterangan</label>
                        <?php date_default_timezone_set('Asia/Jakarta');
                        $sekarang = strtotime(date('H:i:s'));
                        $hadir = strtotime('06:00:00');
                        $telat = strtotime('8:15:00');
                        $pulang = strtotime('16:00:00');
                        if ($sekarang >= $hadir && $sekarang < strtotime('08:00:00')) {
                            $t = ' <input type="text" class="form-control" id="inputPassword4" name="keterangan" value="Hadir" readonly>';
                        } elseif ($sekarang >= $telat && $sekarang < strtotime('16:00:00')) {
                            $t = ' <input type="text" class="form-control" id="inputPassword4" name="keterangan" value="Telat" readonly>';
                        } elseif ($sekarang >= $pulang && $sekarang < strtotime('18:30:00')) {
                            $t = ' <input type="text" class="form-control" id="inputPassword4" name="keterangan" value="Pulang" readonly>';
                        } else {
                            $t = ' <input type="text" class="form-control" id="inputPassword4" name="keterangan" value="Lembur" readonly>';
                        }
                        echo $t;
                        ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="custon-file">Foto Kehadiran</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto" name="file">
                            <label class="custom-file-label" for="foto">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="form-col mb-2 mt-4">

                    <button type="submit" class="btn btn-success">
                        <i class="far fa-paper-plane"></i>
                        Submit
                    </button>

                </div>
                <?php echo form_close(); ?>
        </div>
    </div>
</div>