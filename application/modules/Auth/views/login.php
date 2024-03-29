<body class="bg-image" style="background-image: url('<?php echo base_url(); ?>desain/images/bg-2.jpg');">

  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login!</h1>
                  </div>

                  <?php echo $this->session->flashdata('message'); ?>

                  <form class="user" method="post" action="<?php echo base_url('Auth/Login'); ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?php echo set_value('username') ?>">
                      <?php echo form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                      <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="mb-3 row">
                      <div class="pl-5">
                        <input type="checkbox" class="form-check-input" id="show-password">
                        <label for="show-password" style="font-size: 14px;">Tampilkan Password</label>
                      </div>
                    </div>
                    <div class="button-auth">
                      <button type="submit" class="btn btn-user btn-block text-white">
                        Login
                      </button>
                    </div>
                  </form>
                  <hr>
                  <div class="link-auth">
                    <!-- <a class="small" href="<?php echo base_url(); ?>Auth/LupaPassword">Lupa Password?</a>
                    <br> -->
                    <a class="small" href="<?php echo base_url(); ?>Auth/Register">Belum Punya Akun? Register!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 text-dark text-center">
                <h6 class="font-weight-bold">Admin</h6>
                <h6>Username : Admin</h6>
                <h6>Password : 123</h6>
              </div>
              <div class="col-lg-6 text-dark text-center">
                <h6 class="font-weight-bold">User</h6>
                <h6>Username : rifaldi</h6>
                <h6>Password : asd</h6>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script>
    document.getElementById("show-password").addEventListener("change", function() {
      var passwordInput = document.getElementById("password");
      if (this.checked) {
        passwordInput.type = "text";
      } else {
        passwordInput.type = "password";
      }
    });
  </script>