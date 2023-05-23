<body class="bg-image" style="background-image: url('<?php echo base_url(); ?>desain/images/bg-2.jpg');">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-7 col-lg-7 col-md-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Reset Password?</h1>
                                    </div>

                                    <?php echo $this->session->flashdata('message'); ?>

                                    <form class="user" action="<?php echo base_url('Auth/LupaPassword/proses_reset_password') ?>" method="post">

                                        <div class="form-group">
                                            <label for="password">Password Baru</label>
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan Password Baru..." required>
                                            <!-- <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                        </div>
                                        <div class="button-auth">
                                            <button type="submit" class="btn btn-user btn-block text-white">
                                                Reset Password
                                            </button>
                                        </div>

                                    </form>

                                    <hr>

                                    <div class="link-auth">
                                        <div class="text-center">
                                            <a class="small" href="<?php echo base_url(); ?>Auth/Register">Buat Akun!</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="<?php echo base_url(); ?>Auth/Login">Sudah Punya Akun? Login!</a>
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