<div class="row justify-content-center ml-4 mt-4">
    <div class="row-md-8">
        <h3>Laporan Kehadiran Keasistenan</h3>
    </div>
    <div class="col-md-11">
        <a href="<?= base_url("Home/grafik") ?>" class="btn btn-primary float-right">
            <i class="fas fa-chart-line"></i>
            grafik kehadiran
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
            <div style="overflow-x:auto;">
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
                                    <img width="65" src="<?= base_url() ?>assets/foto/<?= $item['file']; ?>" alt="">
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
</div>