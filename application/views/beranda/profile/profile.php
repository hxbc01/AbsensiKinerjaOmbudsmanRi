<div class="row justify-content-center mt-8">
    <div class="row-md-8">
        <h3>Profil Asisten Ombudsman</h3>
        <?= $this->session->flashdata('message'); ?>
    </div>
</div>
<div class="row justify-content-center mt-4">
    <div class="card shadow">
        <div class="row justify-content mt-3">
            <div class="row-ml-4">
                <a href="<?= base_url("Home/index") ?>" class="btn btn-primary btn-circle btn-lg">
                    <i class="fas fa-arrow-circle-left"></i>
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <img width="100" border-radius="50%" src="<?= base_url('assets/profile/') . $users['foto']; ?>" alt="" loop="infinity">
        </div>
        <div class="card-body">
            <div class="col justify-content-center mt-4">
                <h5 class="text-gray-900"><?= $users['name']; ?></h5>
                <h5 class="text-gray-900"><?= $users['nip']; ?></h5>
                <h5 class="text-gray-900"><?= $users['bidang']; ?></h5>
            </div>
            <div class="row justify-content-center mt-4">
                <a href="<?= base_url("user/Profile/edit") ?>" class="btn btn-primary">
                    <i class="fas fa-user-tag"></i>
                    Edit Profile
                    </i>
                </a>
            </div>
        </div>