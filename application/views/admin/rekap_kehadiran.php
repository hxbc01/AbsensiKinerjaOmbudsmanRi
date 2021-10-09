<div class="row justify-content-center ml-4 mt-4">
    <div class="row-md-8">
        <h3>Laporan Kehadiran Keasistenan</h3>
        <?= $this->session->flashdata('message'); ?>
    </div>

    <div class="col-md-11 mt-4 mr-4">

        <div class="btn-group float-right" role="group" aria-label="Third group">
            <a href="<?= base_url("admin/Home_admin/reset") ?>" class="btn btn-danger ">
                <i class="fas fa-undo"></i>
                Reset
                </i>
            </a>
        </div>
        <div class="btn-group " role="group" aria-label="Third group">
            <a href="<?= base_url('admin/Home_admin/izin') ?>" class="btn btn-info ">
                <i class="fas fa-clipboard-list"></i>
                Peizinan
                </i>
            </a>
        </div>
        <div class="btn-group " role="group" aria-label="Third group">
            <a href="<?= base_url('admin/Rekap_admin/exel') ?>" class="btn btn-success ">
                <i class="far fa-file-excel"></i>
                excel
                </i>
            </a>
        </div>
    </div>

</div>

<div class="row justify-content-center mt-4">
    <div class="card shadow" style="width: 90%;">
        <div class="row justify-content mt-3">
            <div class="row-ml-4">
                <a href="<?= base_url("admin/Home_admin/index") ?>" class="btn btn-primary btn-circle btn-lg">
                    <i class="fas fa-arrow-circle-left"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th scope="row justify-content-center">No</th>
                        <th scope="row justify-content-center">Nio</th>
                        <th scope="row justify-content-center">IMG</th>
                        <th scope="row justify-content-center">Nama</th>
                        <th scope="row justify-content-cer">Waktu</th>
                        <th scope="row justify-content-center">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php date_default_timezone_set('Asia/Jakarta'); ?>
                    <?php $no = 1; ?>
                    <?php foreach ($presensi as $item) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $item['nip']; ?></td>
                            <td>
                                <img width="50" src="<?= base_url() ?>assets/foto/<?= $item['file']; ?>" alt="">
                            </td>

                            <td><?= $item['nama']; ?></td>
                            <td><?= date('d-M-Y H:i:s', $item['waktu']) ?></td>
                            <td><?= $item['keterangan']; ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>