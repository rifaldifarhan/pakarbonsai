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
                  <h3 class="text-gray-900">Pilih Gejala</h3>
                </div>
                <?php echo form_open(base_url('User/Konsultasi/hitung')); ?>
                <table id="tabel-diagnosis" class="table table-striped">
                  <thead class="thead-table">
                    <tr>
                      <th class="col-md-1">No</th>
                      <th class="col-md-10">Gejala Pada Tanaman</th>
                      <th>Pilihan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                    foreach ($list_gejala as $data) : ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data->nama_gejala ?></td>
                        <td>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="gejala[]" value="<?php echo $data->id_gejala; ?>" id="pilih">
                            <label class="form-check-label" for="flexCheckDefault"></label>
                          </div>
                        </td>
                      </tr>
                  </tbody>
                <?php endforeach; ?>
                </table>
                <div class="button-diagnosis">
                  <button type="submit" class="btn btn-diagnosis text-white"><i class="fa-solid fa-magnifying-glass"></i> Diagnosis</button>
                </div>

                <?php form_close(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</header>