<?php echo form_open_multipart('Admin/Gejala/update'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Gejala</h1>
    </div>
    <div class="col-lg-6">
        <?php echo $this->session->flashdata('message'); ?>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="card-body">

            <div class="form-group">
                <label for="id">ID Gejala</label>
                <input class="form-control" type="text" name="id_gejala" id="id_gejala" placeholder="" value="<?php echo $record_gejala->id_gejala ?>" readonly />
                <!-- <input type="hidden" name="id" value="<?php echo $record_gejala->id_gejala ?>"> -->
            </div>

            <div class="form-group">
                <label for="nama">Nama Gejala</label>
                <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $record_gejala->nama_gejala ?>" required />
                <!-- <input type="hidden" name="nama" value="<?php echo $record_gejala->nama_gejala ?>"> -->
            </div>

            <!-- <div class="form-group">
                    <label for="name">Photo</label>
                    <input class="form-control-file <?php echo form_error('image') ? 'is-invalid' : '' ?>" type="file" name="image" />
                    <input type="hidden" name="old_image" value="<?php echo $product->image ?>" />
                    <div class="invalid-feedback">
                        <?php echo form_error('image') ?>
                    </div>
                </div> -->

            <!-- <div class="form-group">
                    <label for="name">Description*</label>
                    <textarea class="form-control <?php echo form_error('description') ? 'is-invalid' : '' ?>" name="description" placeholder="Product description..."><?php echo $product->description ?></textarea>
                    <div class="invalid-feedback">
                        <?php echo form_error('description') ?>
                    </div>
                </div> -->

            <input class="btn btn-success" type="submit" name="btn" value="update" />

            </form>

        </div>

    </div>

</div>

<?php form_close(); ?>