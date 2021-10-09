<div class="row justify-content-center mt-4">
    <div class="row-md-8">
        <h3>Rekam Kehadiran Keasistenan</h3>
    </div>
</div>
<div class="row justify-content-center mt-4">
    <div class="card shadow mt-4 ">
        <div class="row-ml-4">
            <a href="<?= base_url("user/Profile/index") ?>" class="btn btn-primary btn-circle btn-lg">
                <i class="fas fa-arrow-circle-left"></i>
            </a>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-lg-11">
                    <?= form_open_multipart('user/Profile/edit'); ?>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">NIO</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nip" name="nip" value="<?= $users['nip']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_" class="col-sm-2 col-form-label">Asisten</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Full Name" name="name" value="<?= $users['name']; ?>">

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2">Picture</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="<?= base_url('assets/profile/') . $users['foto']; ?>" class="img-thumbnail">
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="foto" name="foto">
                                        <label class="custom-file-label" for="foto">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-mt-4 justify-content-end ">
                        <div class="col-sm-12">
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-tags"></i>
                                    Edit
                                </button>
                            </div>
                        </div>
                    </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>