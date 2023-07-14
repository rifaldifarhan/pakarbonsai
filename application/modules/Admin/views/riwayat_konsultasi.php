<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Riwayat Konsultasi</h1>
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
              <th>ID Riwayat</th>
              <th>Usernmame</th>
              <th>Tanggal Konsultasi</th>
              <th>Penyakit</th>
              <th>Hasil</th>
              <th>Pilihan</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <?php $no = 1;
          foreach ($list_riwayat as $data) : ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $data->id_riwayat ?></td>
              <td><?php echo $data->username ?></td>
              <td><?php echo $data->tgl_diagnosa ?></td>
              <td><?php echo $data->penyakit ?></td>
              <td><?php echo $data->hasil ?>%</td>
              <td><?php echo $data->pilihan ?></td>
              <td>
                <a href=<?php echo base_url('Admin/RiwayatKonsultasi/delete/' . $data->id_riwayat) ?> class="btn btn-danger btn-sm">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>