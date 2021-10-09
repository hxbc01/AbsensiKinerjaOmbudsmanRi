<div class="row justify-content-center ml-4 mt-4">
    <div class="row-md-8">
        <h3>Change Password</h3>
        <?= $this->session->flashdata('message'); ?>
    </div>
</div>
<div class="row justify-content-center mt-4">

    <div class="card shadow" style="width: 50%;">
        <div class="row justify-content mt-3">
            <div class="row-ml-4">
                <a href="<?= base_url("admin/Profile_admin/index") ?>" class="btn btn-primary btn-circle btn-lg">
                    <i class="fas fa-arrow-circle-left"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('admin/Profile_admin/password_update') ?>" method="post">
                <div class="form-group">
                    <label for="formGroupExampleInput">Password Baru</label>
                    <input type="password" class="form-control" id="passwordlama" placeholder="Silahkan masukan password baru " name="password">
                    <?= form_error('password', '<small class="form-text ml-2 mt-1 text-danger">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="passwordbaru" placeholder="Silahkan konfirmasi pasword baru" name="password2">
                    <?= form_error('password', '<small class="form-text ml-2 mt-1 text-danger">', '</small>') ?>
                </div>
                <div class="form-col mb-2 mt-4">
                    <button type="submit" class="btn btn-success">
                        <i class="far fa-paper-plane"></i>
                        Submit
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>