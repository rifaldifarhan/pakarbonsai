<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-2 text-gray-800">Data Gejala</h1>
    <a href="<?php echo base_url('Admin/Gejala/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
      <i class="fas fa-plus fa-sm text-white-50"></i> Tambah</a>
  </div>

  <div class="col-lg-6">
    <?php echo $this->session->flashdata('message'); ?>
  </div>

  <!-- DataTales Example -->
  <div class="card border-left-info shadow mb-4">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="bg-success text-white">
            <tr>
              <th>No</th>
              <th>ID Gejala</th>
              <th>Nama Gejala</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <?php $no = 1;
          foreach ($list_gejala as $data) : ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $data->id_gejala ?></td>
              <td><?php echo $data->nama_gejala ?></td>
              <td>
                <a href=<?php echo base_url('Admin/Gejala/edit/' . $data->id_gejala) ?> class="btn btn-warning btn-sm">Edit</a>
                <a href=<?php echo base_url('Admin/Gejala/delete/' . $data->id_gejala) ?> class="btn btn-danger btn-sm">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>