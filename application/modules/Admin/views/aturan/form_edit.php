<?php echo form_open_multipart('Admin/Aturan/update'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Aturan</h1>
    </div>

    <div class="col-lg-6">
        <?php echo $this->session->flashdata('message'); ?>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card border-left-primary shadow mb-4">
                <div class="card-body w-100 row">
                    <input type="hidden" name="idgejala" value="<?= $idgejala ?>">
                    <?php foreach ($list_penyakit as $value) : ?>

                        <!-- <?php echo json_encode($list_penyakit) ?> -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nama_penyakit">Skor <?php echo $value->nama_penyakit ?></label>
                                <input class="form-control" type="text" name="skor_<?= $value->id_penyakit ?>" id="skor_<?= $value->id_penyakit ?>" placeholder="" value="<?php echo @$this->M_aturan->get_Skor($idgejala, $value->id_penyakit) + 0 ?>" />
                            </div>
                        </div>

                    <?php endforeach; ?>
                    <div class="col-sm-12">
                        <input class="btn btn-success" type="submit" name="btn" value="update" />
                    </div>

                    </form>

                </div>

            </div>
        </div>
    </div>

</div>

<?php form_close(); ?>