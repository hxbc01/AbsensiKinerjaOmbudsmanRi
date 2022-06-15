<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/datepicker/dist/css/datepicker.material.css">

<div class="row justify-content-center ml-4 mt-4">
    <div class="row-md-8">
        <h3>Laporan Kinerja</h3>
        <?= $this->session->flashdata('message'); ?>
    </div>
    <div class="col-md-11">
        <a href="<?= base_url('laporan_kinerja/print') ?>" class="btn btn-warning float-right">
            <i class="fas fa-print"></i>
            Print Laporan
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
            <form action="<?php echo base_url('Laporan_kinerja/input') ?>" method="post">
                <h7>Laporan Kinerja</h7>
                <div class="form-row-md-2">
                    <div class="form-group">
                        <textarea name="content" id="content" cols="30" rows="10">
                     </textarea>
                    </div>
                    <div class="form-group col-md-3 mt-4">
                        <label for="datepicker">
                            <h7>Tanggal</h7>
                        </label>
                        <input type="text" class="form-control" id="datepicker" name="tanggal">
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <label for="inputState">Keterangan</label>
                        <select id="inputState" class="form-control" name="keterangan">
                            <option selected>Choose...</option>
                            <option value="Cuti Karyawan Tahunan">Cuti Karyawan Tahunan</option>
                            <option value="Cuti sakit">Cuti sakit</option>
                            <option value="Cuti Hamil">Cuti Hamil</option>
                            <option value="Cuti Besar">Cuti Besar</option>
                            <option value="Cuti Penting">Cuti Penting</option>
                            <option value="Cuti Bersama">Cuti Bersama</option>
                            <option value="Cuti Berbayar">Cuti Berbayar</option>
                            <option value=" ">Tidak Memilih</option>
                        </select>
                    </div>
                    <div class="form-col mb-2 mt-4">
                        <button type="submit" class="btn btn-success">
                            <i class="far fa-paper-plane"></i>
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Button trigger modal -->

<script src="<?= base_url(); ?>assets/vendor/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>
<script type="text/javascript" src="<?= base_url() ?>assets/vendor/datepicker/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script src="<?= base_url() ?>assets/vendor/datepicker/dist/datepicker.js"></script>
<script type="text/javascript">
    var datepicker = new Datepicker('#datepicker');
</script>