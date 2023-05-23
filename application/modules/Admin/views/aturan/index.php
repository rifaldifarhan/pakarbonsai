<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Aturan Sistem Pakar Bonsai</h1>
    <!-- <a href="<?php echo base_url('Admin/Gejala/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
      <i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a> -->

    <?php echo $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card border-left-primary shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-success text-white">
                        <tr>
                            <th>No</th>
                            <th>ID Rule</th>
                            <th>ID Gejala</th>
                            <th>ID Penyakit</th>
                            <th>Skor</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <?php $no = 1;
                    foreach ($list_aturan as $data) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data->idskor_gejala ?></td>
                            <td><?php echo $data->gejala_idgejala ?></td>
                            <td><?php echo $data->penyakit_idpenyakit ?></td>
                            <td><?php echo $data->skor ?></td>
                            <td>
                                <a href=<?php echo base_url('Admin/Aturan/edit/' . $data->idskor_gejala) ?> class="btn btn-warning btn-sm">Edit</a>
                                <!-- <a href=<?php echo base_url('Admin/Aturan/delete/' . $data->idskor_gejala) ?> class="btn btn-danger btn-sm">Hapus</a> -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>