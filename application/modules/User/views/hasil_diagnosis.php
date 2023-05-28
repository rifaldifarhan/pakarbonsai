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
                  <h3 class="text-gray-900">Hasil Diagnosis</h3>
                </div>
                <?php echo form_open(base_url('User/Diagnosis')); ?>

                <div class="judul_hasil">
                  <h5 class="text-gray-900 font-weight-bold">Hasil Perhitungan</h5>
                </div>
                <div>
                  <table class="table table-striped">
                    <thead class="thead-table">
                      <tr>
                        <th>ID Penyakit</th>
                        <th>Nama Penyakit</th>
                        <th>Skor</th>
                      </tr>
                    </thead>
                    <?php for ($i = 0; $i < sizeof($hasil); $i++) : ?>
                      <tr>
                        <td><?= $hasil[$i]['id_penyakit'] ?></td>
                        <td><?= $hasil[$i]['nama'] ?></td>
                        <td><?= $hasil[$i]['hasil_hitung'] ?></td>
                      </tr>
                    <?php endfor; ?>
                  </table>
                </div>

                <div class="judul_hasil">
                  <h5 class="text-gray-900 font-weight-bold">Diagnosa</h5>
                </div>
                <div class="row text-isi">
                  <!-- <h6 class="text-gray-700"><?= $hasil[0]["id_penyakit"] ?></h6> -->
                  <h6 class="text-gray-700">Tanaman anda di diagnosa Penyakit <span class="nama-penyakit"><?= $hasil[0]["nama"] ?></span></h6>
                  <!-- <h6 class="text-gray-700"><?= $hasil[0]["hasil_hitung"] ?></h6> -->
                </div>
                <hr>

                <div class="judul_hasil">
                  <h5 class="text-gray-900">Pengendalian</h5>
                </div>
                <div class="text-isi">
                  <h6 class="text-gray-700"><?= $hasil[0]["pengendalian"] ?></h6>
                </div>

                <hr>

                <!-- <div class="judul_hasil">
                  <h5 class="text-gray-900">Penanggulangan</h5>
                </div>
                <div class="text-isi">
                  <h6 class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
                </div>

                <hr> -->

                <br>
                <?php form_close(); ?>

                <div class="button-diagnosis mb-2">
                  <a href="<?php echo base_url('User/Konsultasi/cetak_laporan'); ?>" class="btn btn-warning text-white" target="_blank"><i class="fa-solid fa-print"></i> Cetak</a>
                </div>

                <div class="col-lg-12 text-center">
                  <a href="<?php echo base_url('User/Home'); ?>" class="btn btn-success text-center"><i class="fa-solid fa-check"></i> Selesai</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</header>