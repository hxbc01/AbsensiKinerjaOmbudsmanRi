<div class="row justify-content-center ml-4 mt-4">
    <div class="row-md-8">
        <h3>Rekap Perizinan Keasistenan</h3>
        <?= $this->session->flashdata('message'); ?>
    </div>
    <div class="col-md-11 mt-4 mr-4">
        <a href="<?= base_url("admin/Home_admin/reset_izin") ?>" class="btn btn-danger float-right">
            <i class="fas fa-undo"></i>
            Reset
            </i>
        </a>
        <a href="<?= base_url("admin/Rekap_admin/excel_izin") ?>" class="btn btn-success">
            <i class="far fa-file-excel"></i>
            excel
            </i>
        </a>
    </div>
</div>
<div class="row justify-content-center mt-4">
    <div class="card shadow" style="width: 90%;">
        <div class="row justify-content mt-3">
            <div class="row-ml-4">
                <a href="<?= base_url("admin/Home_admin/presensi") ?>" class="btn btn-primary btn-circle btn-lg">
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
                            <th scope="row justify-content-center">Lampiran</th>
                            <th scope="row justify-content-center">Nama</th>
                            <th scope="row justify-content-center">Penjelasan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($izin as $item) : ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $item['nip']; ?></td>
                                <td>
                                    <img width="50" src="<?= base_url() ?>assets/foto/<?= $item['file']; ?>" alt="">
                                </td>

                                <td><?= $item['nama']; ?></td>
                                <td><?= $item['penjelasan']; ?> </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>