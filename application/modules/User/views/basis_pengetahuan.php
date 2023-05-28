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
                  <h3 class="text-gray-900">Basis Pengetahuan</h3>
                </div>

                <hr>

                <?php foreach ($list_pengetahuan as $value) : ?>

                  <div class="judul_hasil text-center mb-2">
                    <h4 class="nama-penyakit text-gray-900 font-weight-bold"><?php echo $value->nama_penyakit ?></h4>
                  </div>

                  <!-- <div class="gambar_penyakit">
                  <img src="gambar/penyakit-bonsai.jpg">
                </div> -->

                  <div class="judul_hasil">
                    <h5 class="text-gray-900 font-weight-bold">Pengertian</h5>
                  </div>
                  <div class="text-isi">
                    <h6 class="text-gray-700"><?php echo $value->pengertian ?></h6>
                  </div>
                  <hr>

                  <div class="judul_hasil">
                    <h5 class="text-gray-900">Pengendalian</h5>
                  </div>
                  <div class="text-isi">
                    <h6 class="text-gray-700"><?php echo $value->penanggulangan ?></h6>
                  </div>

                  <hr>

                <?php endforeach; ?>

                <!-- <div class="judul_hasil">
                  <h5 class="text-gray-900">Penanggulangan</h5>
                </div>
                <div class="text-isi">
                  <h6 class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                    sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
                </div>

                <hr> -->

                <br>

                <div class="col-lg-12 text-center">
                  <a href="<?php echo base_url('User/Home'); ?>" class="btn btn-success text-center"><i class="fa-solid fa-arrow-left-long"></i> Kembali</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</header>