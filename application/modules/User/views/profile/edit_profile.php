<?php echo form_open_multipart('User/Profile/edit'); ?>

<header class="bg-image" style="background-image: url('<?php echo base_url(); ?>desain/images/bg-3.jpg');">

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center py-5">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-3">
                                <div class="text-center mb-4">
                                    <h3 class="text-gray-900">Edit Profile</h3>
                                </div>

                                <div class="row">

                                    <div class="col-lg-4">
                                        <div class="card border-left-info">
                                            <div class="card-body">
                                                <div class="d-flex flex-column align-items-center text-center">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                                    <div class="mt-3">
                                                        <h4><?php echo $user['nama'] ?></h4>
                                                        <p class="text-secondary font-weight-bold mb-1">User Pakar Bonsai</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="card border-left-info">

                                            <div class="card-body">
                                                <div class="row mb-3">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Nama</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $user['nama'] ?>">
                                                        <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Username</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $user['username'] ?>">
                                                        <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Email</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $user['email'] ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Telepon/No. HP</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <input type="number" class="form-control" id="telepon" name="telepon" value="<?php echo $user['telepon'] ?>">
                                                        <?php echo form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Alamat</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $user['alamat'] ?>">
                                                        <?php echo form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3"></div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <input type="submit" class="btn btn-info px-4 text-white" value="Simpan">
                                                        <a href="<?php echo base_url('User/Profile') ?>" class="btn btn-warning px-4 text-white">Kembali</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>

<?php form_close(); ?>