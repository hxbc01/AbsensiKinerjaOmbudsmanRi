<div class="row justify-content-center ml-4 mt-4">
    <div class="row-md-8">
        <h3>Kelola Kinerja</h3>
        <?= $this->session->flashdata('message'); ?>
    </div>
    <div class="col-md-11 mt-4 mr-4">
        <a href="<?= base_url("admin/Laporan_admin/reset") ?>" class="btn btn-danger float-right">
            <i class="fas fa-undo"></i>
            Reset
            </i>
        </a>
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
                        <th scope="row justify-content-center">Nip</th>
                        <th scope="row justify-content-center">Tanggal</th>
                        <th scope="row justify-content-center">Laporan Kinerja</th>
                        <th scope="row justify-content-center">keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($laporan as $item) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $item['nip']; ?></td>
                            <td><?= $item['tanggal']; ?></td>
                            <td><?= $item['content']; ?> </td>
                            <td><?= $item['keterangan']; ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>