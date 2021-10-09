<div class="row justify-content-center ml-4 mt-4">
    <div class="row-md-8">
        <h3>Kelola Account Asisten</h3>
        <?= $this->session->flashdata('message'); ?>
    </div>
    <div class="col-md-11">
        <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-user-plus"></i>
            Tambah User
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
                        <th scope="row justify-content-center">NIO</th>
                        <th scope="row justify-content-center">Profile</th>
                        <th scope="row justify-content-center">Nama</th>
                        <th scope="row justify-content-cer">Bidang Keasistenan</th>
                        <th scope="row justify-content-cer">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($asisten as $item) : ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $item['nip']; ?></td>
                            <td>
                                <img width="50" src="<?= base_url() ?>assets/profile/<?= $item['foto']; ?>" alt="">
                            </td>
                            <td><?= $item['name']; ?></td>
                            <td><?= $item['bidang']; ?> </td>
                            <td>
                                <a href="<?= base_url('admin/Home_admin/delete/' . $item['nip']) ?>" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<!-- modal tambah user -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="user" method="post" action="<?= base_url('Auth/register') ?>">
                    <d class="form-group">
                        <input type="text" class="form-control form-control-user" id="Name" name="name" placeholder="full name" value="<?= set_value('name'); ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="NIP" name="nip" placeholder="Nio" value="<?= set_value('nip'); ?>">
                            <?= form_error('nip', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <select class="custom-select mr-sm-2 badge-pill " id="inlineFormCustomSelect" name="bidang">
                                <option selected>Pilih Bidang</option>
                                <option value="Pencegahan">Pencegahan</option>
                                <option value="Verifikasi Laporan">Verifikasi Laporan</option>
                                <option value="Pemeriksaan Laporan">Pemeriksaan Laporan</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" id="Password confirmation" name="password" placeholder="Password">
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Register Account
                        </button>
                        <hr>
                </form>
            </div>
        </div>
    </div>
</div>