<header class="bg-image" style="background-image: url('<?php echo base_url(); ?>desain/images/bg-3.jpg');">

  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center py-5">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center mb-4">
                  <h3 class="text-gray-900">Riwayat Konsultasi</h3>
                </div>
                <table id="tabel-diagnosis" class="table table-striped">
                  <thead class="thead-table">
                    <tr>
                      <th class="col-md-1">No</th>
                      <th>Username</th>
                      <th>Tanggal Konsultasi</th>
                      <th>Hasil Hitung</th>
                      <!-- <th>Pilihan</th> -->
                      <th>Pilihan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                    foreach ($list_riwayat as $data) : ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data->username ?></td>
                        <td><?php echo $data->tgl_diagnosa ?></td>
                        <td><?php echo $data->hasil ?></td>
                        <td><?php echo $data->pilihan ?></td>
                      </tr>
                  </tbody>
                <?php endforeach; ?>
                </table>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</header>

<script type="text/javascript">
$(document).ready(function() {
    $('#tabel-diagnosis').DataTable( {
        "order": [[ 1, "desc" ]]
    } );
} );