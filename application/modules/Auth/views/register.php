<body class="bg-image" style="background-image: url('<?php echo base_url(); ?>desain/images/bg-2.jpg');">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Register!</h1>
                  </div>
                  <form class="user" method="post" action="<?php echo base_url('Auth/Register'); ?>">
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama" value="<?php echo set_value('nama') ?>">
                        <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?php echo set_value('username') ?>">
                        <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                        <!-- <select type="text" class="form-control form-control-user" id="role" name="role">
                        Pilih Sebagai
                        <option selected>Daftar sebagai...</option>
                        <option value="role">User</option>
                        <option value="role">Admin</option>
                      </select> -->
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?php echo set_value('email') ?>">
                      <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat" value="<?php echo set_value('alamat') ?>">
                      <?php echo form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="telepon" name="telepon" placeholder="Telepon" value="<?php echo set_value('telepon') ?>">
                      <?php echo form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0" id="staticParent">
                        <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                        <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                      <div class="col-sm-6">
                        <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                      </div>
                    </div>
                    <div class="button-auth">
                      <button type="submit" class="btn btn-user btn-block text-white">
                        Register
                      </button>
                    </div>
                  </form>

                  <hr>

                  <div class="link-auth">
                    <a class="small" href="<?php echo base_url(); ?>Auth/LupaPassword">Lupa Password?</a>
                    <br>
                    <a class=" small" href="<?php echo base_url(); ?>Auth/Login">Sudah Punya Akun? Login!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>