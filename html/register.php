  <?php
  include 'koneksi.php';
  include 'controller.php';
  include 'head.php';
  
  $email = "";
  $nama_lengkap = "";

  if (isset($_POST['daftar'])) {
      $nama_lengkap           = htmlspecialchars(ucwords($_POST['nama_lengkap']));
      $email                  = htmlspecialchars(strtolower($_POST['email']));
      $password               = htmlspecialchars($_POST['pass']);
      $konfirmasi_password    = htmlspecialchars($_POST['c_pass']);
      $level = 1;

      if ($password != $konfirmasi_password) {
          echo "<script>alert('Password yang anda masukkan tidak sesuai!');
          window.location='register.php';</script>";
      } else {
          if ($password == $konfirmasi_password) {
              $sql1 = "insert into user(nama_lengkap, email, password, level) values ('$nama_lengkap', '$email', md5('$password'), '$level')";
              $q1 = mysqli_query($conn, $sql1);
              if ($q1) {
                echo "<script>alert('Registrasi berhasil. Silahkan Login!');
                window.location='index.php';</script>";

                  $email          = "";
                  $nama_lengkap   = "";
              } else {
                  echo "<script>alert('Akun gagal terdaftar');window.location='register.php';</script>";
              }
          }
      }
  }
?>

  <body>
    <div class="main-wrapper">
      <!-- ============================================================== -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->
      <div class="preloader">
        <div class="lds-ripple">
          <div class="lds-pos"></div>
          <div class="lds-pos"></div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Login box.scss -->
      <!-- ============================================================== -->
      <div
        class="
          auth-wrapper
          d-flex
          no-block
          justify-content-center
          align-items-center
          bg-dark
        "
      >
        <div class="auth-box bg-dark border-top border-secondary">
          <div>
            <div class="text-center pt-3 pb-3">
            <span class="db"
                ><img src="../assets/images/logo-icon.png" alt="logo"
              /></span>
              <span class="db"
                ><img src="../assets/images/toko-komputer.png" alt="logo" width="80%"
              /></span>
            </div>
            <!-- Form -->
            <form class="form-horizontal mt-3" action="" method="post">
              <div class="row pb-4">
                <div class="col-12">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-success text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-account fs-4"></i
                      ></span>
                    </div>
                    <input
                      type="text"
                      class="form-control form-control-lg"
                      placeholder="Nama lengkap"
                      aria-label="Nama lengkap"
                      aria-describedby="basic-addon1"
                      name="nama_lengkap"
                      id="nama_lengkap"
                      required
                    />
                  </div>
                  <!-- email -->
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-danger text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-email fs-4"></i
                      ></span>
                    </div>
                    <input
                      type="email"
                      class="form-control form-control-lg"
                      placeholder="Alamat E-mail"
                      aria-label="Alamat email"
                      aria-describedby="basic-addon1"
                      name="email"
                      id="email"
                      required
                    />
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-warning text-white h-100"
                        id="basic-addon2"
                        ><i class="mdi mdi-lock fs-4"></i
                      ></span>
                    </div>
                    <input
                      type="password"
                      class="form-control form-control-lg"
                      placeholder="Password"
                      aria-label="Password"
                      aria-describedby="basic-addon1"
                      name="pass"
                      id="pass"
                      required
                      minlength="4"
                    />
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-info text-white h-100"
                        id="basic-addon2"
                        ><i class="mdi mdi-lock fs-4"></i
                      ></span>
                    </div>
                    <input
                      type="password"
                      class="form-control form-control-lg"
                      placeholder=" Confirm Password"
                      aria-label="Password"
                      aria-describedby="basic-addon1"
                      name="c_pass"
                      id="c_pass"
                      required
                    />
                  </div>
                </div>
              </div>
              <div class="row border-top border-secondary">
                <div class="col-12">
                  <div class="form-group">
                    <div class="pt-3 d-grid">
                      <button
                      type="submit"
                      name="daftar"
                        class="btn btn-block btn-lg btn-success"
                        style="color: white;"
                      >
                        Register
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row border-top border-secondary">
                <div class="col-12">
                  <div class="form-group">
                    <div class="pt-3 d-grid">
                      <a href="index.php"
                      class="btn btn-block btn-lg btn-info"
                      style="color: white;">Kembali</a>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- Login box.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper scss in scafholding.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper scss in scafholding.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right Sidebar -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right Sidebar -->
      <!-- ============================================================== -->
    </div>
    <footer class="footer text-center">
          Kelompok 10 (Sistem informasi penjualan laptop)
           
        </footer>
    <?php
    include 'script.php';
    ?>
  </body>
</html>
