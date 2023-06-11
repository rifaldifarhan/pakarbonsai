<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Aturan Sistem Pakar Bonsai</h1>
        <!-- <a href="<?php echo base_url('Admin/Gejala/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
      <i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a> -->
    </div>

    <?php echo $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card border-left-primary shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" cellspacing="0">
                    <thead class="bg-success text-white">
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">ID Gejala</th>
                            <th colspan="<?php echo sizeof($penyakit) ?>" class="text-center">Penyakit</th>
                            <th rowspan="2">Opsi</th>
                        </tr>
                        <tr>
                            <?php foreach ($penyakit as $val_penyakit) : ?>
                                <th><?php echo $val_penyakit->nama_penyakit ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($gejala as $val_gejala) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $val_gejala->nama_gejala ?></td>
                                <?php foreach ($penyakit as $val_penyakit) : ?>
                                    <td><?php echo $this->M_aturan->get_Skor($val_gejala->id_gejala, $val_penyakit->id_penyakit) ?></td>
                                <?php endforeach; ?>
                                <td>
                                    <a href=<?php echo base_url('Admin/Aturan/edit/' . $val_gejala->id_gejala) ?> class="btn btn-warning btn-sm">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>