<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Penyakit</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="card-body">

            <form action="<?php echo base_url('Admin/Penyakit/insert') ?>" method="post">

                <div class="form-group">
                    <label for="id">ID Penyakit</label>
                    <input class="form-control" type="text" name="id" placeholder="" required />
                </div>

                <div class="form-group">
                    <label for="nama">Nama Penyakit</label>
                    <input class="form-control" type="text" name="nama" placeholder="" required />
                </div>

                <!-- <div class="form-group">
                    <label for="name">Photo</label>
                    <input class="form-control-file <?php echo form_error('image') ? 'is-invalid' : '' ?>" type="file" name="image" />
                    <input type="hidden" name="old_image" value="<?php echo $product->image ?>" />
                    <div class="invalid-feedback">
                        <?php echo form_error('image') ?>
                    </div>
                </div> -->

                <div class="form-group">
                    <label for="name">Penanggulangan</label>
                    <textarea class="form-control <?php echo form_error('description') ? 'is-invalid' : '' ?>" name="description" placeholder=""></textarea>
                    <div class="invalid-feedback">
                        <?php echo form_error('description') ?>
                    </div>
                </div>

                <input class="btn btn-success" type="submit" name="btn" value="Tambah" />
            </form>

        </div>


    </div>

</div>