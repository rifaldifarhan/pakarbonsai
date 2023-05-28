<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Basis Pengetahuan</h1>
    <!-- <a href="<?php echo base_url('Admin/Gejala/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
      <i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a> -->

    <?php echo $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-success text-white">
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Nama Penyakit</th>
                            <th>Pengertian</th>
                            <th>Penanggulangan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <?php $no = 1;
                    foreach ($list as $data) : ?>
                        <!-- <?php echo json_encode($data); ?> -->
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data->nama ?></td>
                            <td><?php echo $data->image ?></td>
                            <td><?php echo $data->pengertian ?></td>
                            <td><?php echo $data->penanggulangan ?></td>
                            <td>
                                <a href=<?php echo base_url('Admin/Gejala/edit/' . $data->id) ?> class="btn btn-warning btn-sm">Edit</a>
                                <a href=<?php echo base_url('Admin/Gejala/delete/' . $data->id) ?> class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>