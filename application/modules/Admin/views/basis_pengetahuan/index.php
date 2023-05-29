<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Basis Pengetahuan</h1>
        <a href="<?php echo base_url('Admin/BasisPengetahuan/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
    </div>

    <?php echo $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead class="bg-success text-white">
                        <tr>
                            <th>No</th>
                            <!-- <th>ID</th> -->
                            <th>Nama Penyakit</th>
                            <th>Pengertian</th>
                            <th>Penanggulangan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <?php $no = 1;
                    foreach ($list_pengetahuan as $data) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data->nama_penyakit ?></td>
                            <!-- <td><?php echo $data->image ?></td> -->
                            <td><?php echo $data->pengertian ?></td>
                            <td><?php echo nl2br(str_replace('', '', htmlspecialchars($data->penanggulangan))) ?></td>
                            <td>
                                <div class="">
                                    <a href=<?php echo base_url('Admin/BasisPengetahuan/edit/' . $data->id) ?> class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="edit"><i class="fas fa-pen"></i></a>
                                    <a href=<?php echo base_url('Admin/BasisPengetahuan/delete/' . $data->id) ?> class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="hapus"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>