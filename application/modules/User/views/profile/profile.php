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
                                    <h3 class="text-gray-900">Profile Saya</h3>
                                </div>

                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card border-left-info">
                                            <div class="card-body">
                                                <div class="d-flex flex-column align-items-center text-center">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                                    <div class="mt-3">
                                                        <h4><?php echo $user['nama'] ?></h4>
                                                        <p class="text-secondary font-weight-bold mb-1">User Pakar Bonsai</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="card border-left-info mb-3">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Nama</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <?php echo $user['nama'] ?>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Username</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <?php echo $user['username'] ?>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Email</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <?php echo $user['email'] ?>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Telepon/No. HP</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <?php echo $user['telepon'] ?>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Alamat</h6>
                                                    </div>
                                                    <div class="col-sm-9 text-secondary">
                                                        <?php echo $user['alamat'] ?>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <a class="btn btn-info text-white" href="<?php echo base_url('User/Profile/edit') ?>">Edit Profile</a>
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