<div class="row justify-content-center ml-4 mt-4">
    <div class="row-md-8">
        <h3>Surat Izin</h3>
        <?= $this->session->flashdata('message'); ?>
    </div>
</div>
<div class="row justify-content-center mt-4">

    <div class="card shadow" style="width: 90%;">
        <div class="row justify-content mt-3">
            <div class="row-ml-4">
                <a href="<?= base_url("Home/presensi") ?>" class="btn btn-primary btn-circle btn-lg">
                    <i class="fas fa-arrow-circle-left"></i>
                </a>
            </div>
        </div>
        <div class="card-body">

            <form action="<?= base_url('Kehadiran/izin') ?>" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nama</label>
                        <input type="text" class="form-control" id="inputEmail4" name="nama" value=" <?= $users['name'] ?> " readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">NIO</label>
                        <input type="text" class="form-control" id="inputPassword4" name="nip" value="<?= $users['nip'] ?>" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlTextarea1">Penjelasan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="penjelasan"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="custon-file">Lampiran Foto Berkas</label>
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