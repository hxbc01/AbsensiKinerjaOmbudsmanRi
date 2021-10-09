<body class="bg-gray-200">

    <div class="container">

        <div class="container">
            <!-- Outer Row -->
            <div class="container">
                <!-- Outer Row -->

                <div class="row justify-content-center mt-4">
                    <div class="col-lg-5">
                        <?= $this->session->flashdata('message'); ?>

                        <div class="card o-hidden border-0 shadow-lg my-5">

                            <div class="row justify-content-center mt-4">
                                <img src="<?= base_url() ?>/assets/img/logo.png" widht="100" height="100" class="rounded" alt="...">
                            </div>
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-lg">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-700 mb-4 mt-6">
                                                    Login Kinerja</h1>
                                            </div>
                                            <form class="user" method="post" action="<?= base_url('Auth') ?>">
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-user" id="nip" name="nip" placeholder="Enter Nio">

                                                </div>
                                                <div class=" form-group">
                                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">

                                                </div>
                                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                                    Login
                                                </button>
                                            </form>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>