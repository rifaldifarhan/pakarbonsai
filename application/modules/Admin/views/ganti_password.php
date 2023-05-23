<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ganti Password</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="card-body">

            <div class="col-lg-6">

                <?php echo $this->session->flashdata('message'); ?>

                <form action="<?php echo base_url('Admin/GantiPassword'); ?>" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password Saat ini</label>
                        <input type="password" class="form-control" id="current_password" name="current_password" placeholder="">
                        <?php echo form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
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

                    <input class="btn btn-success" type="submit" name="btn" value="Ubah Password" />

                </form>

            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->