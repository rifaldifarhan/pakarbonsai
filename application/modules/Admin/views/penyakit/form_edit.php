<?php echo form_open_multipart('Admin/Penyakit/update'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Penyakit</h1>
  </div>

  <div class="col-lg-6">
    <?php echo $this->session->flashdata('message'); ?>
  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="col-lg-12">
      <div class="card border-left-primary shadow mb-4">
        <div class="card-body w-100">

          <div class="form-group">
            <label for="id_penyakit">ID Penyakit </label>
            <input class="form-control" type="text" name="id_penyakit" id="id_penyakit" placeholder="" value="<?php echo $record_penyakit->id_penyakit ?>" readonly />
          </div>

          <div class="form-group">
            <label for="nama_penyakit">Nama Penyakit </label>
            <input class="form-control" type="text" name="nama_penyakit" id="nama_penyakit" placeholder="" value="<?php echo $record_penyakit->nama_penyakit ?>" required />
          </div>

          <div class="form-group">
            <label for="bobot_penyakit">Bobot Penyakit </label>
            <input class="form-control" type="text" name="bobot_penyakit" id="bobot_penyakit" placeholder="" value="<?php echo $record_penyakit->bobot_penyakit ?>" required />
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
            <label for="pengendalian">Pengendalian</label>
            <textarea class="form-control" name="pengendalian" id=pengendalian placeholder="" required>
            <?php echo $record_penyakit->pengendalian ?>
            </textarea>
          </div>

          <input class="btn btn-success" type="submit" name="btn" value="update" />


          </form>

        </div>

      </div>
    </div>
  </div>

</div>

<?php form_close(); ?>