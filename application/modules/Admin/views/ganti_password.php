<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ganti Password</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <!-- Content Row -->
    <div class="col-lg-7">

        <div class="card border-left-primary shadow mb-4">

            <div class="card-body">

                <?php echo $this->session->flashdata('message'); ?>

                <form action="<?php echo base_url('Admin/GantiPassword'); ?>" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password Saat ini</label>
                        <input type="password" class="form-control" id="current_password" name="current_password" placeholder="">
                        <?php echo form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="mb-3 row">
                        <div class="pl-5">
                            <input type="checkbox" class="form-check-input" id="show-password">
                            <label for="show-password" style="font-size: 14px;">Tampilkan Password</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password Baru</label>
                        <input type="password" class="form-control" id="new_password1" name="new_password1" placeholder="">
                        <?php echo form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ulangi Password</label>
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
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

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