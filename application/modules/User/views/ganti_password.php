<header class="bg-image" style="background-image: url('<?php echo base_url(); ?>desain/images/bg-3.jpg');">

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center py-5">
            <div class="col-md-7">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-3">
                                    <div class="text-center mb-4">
                                        <h3 class="text-gray-900">Ganti Password</h3>
                                    </div>

                                    <div class="row">

                                        <div class="card-body">

                                            <?php echo $this->session->flashdata('message'); ?>

                                            <form action="<?php echo base_url('User/GantiPassword'); ?>" method="post">
                                                <div class="form-group mb-3">
                                                    <label class="mb-2" for="exampleInputEmail1">Password Saat ini</label>
                                                    <input type="password" class="form-control" id="current_password" name="current_password" placeholder="">
                                                    <?php echo form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                                <div class="mb-3 row">
                                                    <div class="pl-5">
                                                        <input type="checkbox" class="form-check-input" id="show-password">
                                                        <label for="show-password" style="font-size: 14px;">Tampilkan Password</label>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="mb-2" for="exampleInputEmail1">Password Baru</label>
                                                    <input type="password" class="form-control" id="new_password1" name="new_password1" placeholder="">
                                                    <?php echo form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label class="mb-2" for="exampleInputEmail1">Ulangi Password</label>
                                                    <input type="password" class="form-control" id="new_password2" name="new_password2" placeholder="">
                                                    <?php echo form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                                </div>
                                                <div class="mb-3 row">
                                                    <div class="pl-5">
                                                        <input type="checkbox" class="form-check-input" id="show-password2">
                                                        <label for="show-password" style="font-size: 14px;">Tampilkan Password</label>
                                                    </div>
                                                </div>

                                                <input class="btn btn-success" type="submit" name="btn" value="Ubah Password" />

                                            </form>

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

<script>
    document.getElementById("show-password").addEventListener("change", function() {
        var passwordInput = document.getElementById("current_password");
        if (this.checked) {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    });
    document.getElementById("show-password2").addEventListener("change", function() {
        var passwordInput = document.getElementById("new_password1");
        if (this.checked) {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
        var passwordInput = document.getElementById("new_password2");
        if (this.checked) {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    });
</script>