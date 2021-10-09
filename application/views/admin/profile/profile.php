<div class="row justify-content-center mt-8">
    <div class="row-md-8">
        <h3>Profil admin Ombudsman</h3>
        <?= $this->session->flashdata('message'); ?>
    </div>
</div>
<div class="row justify-content-center mt-4">
    <div class="card shadow">
        <div class="row justify-content mt-3">
            <div class="row-ml-4">
                <a href="<?= base_url("admin/Home_admin/index") ?>" class="btn btn-primary btn-circle btn-lg">
                    <i class="fas fa-arrow-circle-left"></i>
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <img width="100" border-radius="50%" src="<?= base_url("assets/img/default.png") ?>" alt="">
        </div>
        <div class="card-body">
            <div class="col justify-content-center mt-4">
                <h5 class="text-gray-900"><?= $users['name']; ?></h5>
                <h5 class="text-gray-900"><?= $users['nip']; ?></h5>
            </div>
            <div class="row justify-content-center mt-4">
                <a href="<?= base_url("admin/Profile_admin/edit") ?>" class="btn btn-primary">
                    <i class="fas fa-key"></i>
                    Ganti Password
                    </i>
                </a>
            </div>
        </div>