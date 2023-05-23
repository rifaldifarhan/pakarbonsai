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
                                        <h1 class="h4 text-gray-900 mb-2">Lupa Password?</h1>
                                        <p class="mb-4">Jangan panik! Masukkan alamat email di bawah ini
                                            dan kami akan mengirim link untuk reset password!
                                    </div>

                                    <?php echo $this->session->flashdata('message'); ?>

                                    <form class="user" action="<?php echo base_url('Auth/LupaPassword/send_reset_password_email') ?>" method="post">

                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Masukkan Email..." value="<?php echo set_value('email') ?>" required>
                                            <!-- <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?> -->
                                        </div>
                                        <div class="button-auth">
                                            <button type="submit" class="btn btn-user btn-block text-white">
                                                Kirim
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