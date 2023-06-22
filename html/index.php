<?php
include 'koneksi.php';
include 'head.php';
session_start();

    $email = "";
    if (isset($_POST['masuk'])) {
        $email = strtolower($_POST['email']);
        $password = $_POST['password'];

        $sql1 = "SELECT * FROM user WHERE email = '$email'";
        $q1 = mysqli_query($conn, $sql1);
        $r1 = mysqli_fetch_array($q1);
        $n1 = mysqli_num_rows($q1);

        if ($n1 < 1){
          echo "<script>alert('Mohon maaf akun ada tidak ada');
          window.location='index.php';</script>";
        } else if ($r1['password'] != md5($password) && $n1 > 0){
          echo "<script>alert('Password yang anda masukkan tidak sesuai!');
          window.location='index.php';</script>";
        } else {
          if ($r1['level'] == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['level'] = 1;
            $_SESSION['id'] = $r1['id'];
            echo "<script>alert('Selamat datang');
            window.location='admin.php';</script>";
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
          <div id="loginform">
            <div class="text-center pt-3 pb-3">
            <span class="db"
                ><img src="../assets/images/logo-icon.png" alt="logo"
              /></span>
              <span class="db"
                ><img src="../assets/images/toko-komputer.png" alt="logo" width="80%"
              /></span>
            </div>
            <!-- Form -->
            <form
              class="form-horizontal mt-3"
              id="loginform"
              action=""
              method="post"
            >
              <div class="row pb-4">
                <div class="col-12">
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
                      name="email"
                      id="email"
                      class="form-control form-control-lg"
                      placeholder="Email"
                      aria-label="Email"
                      aria-describedby="basic-addon1"
                      required=""
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
                      name="password"
                      id="password"
                      class="form-control form-control-lg"
                      placeholder="Password"
                      aria-label="Password"
                      aria-describedby="basic-addon1"
                      required=""
                      minlength="4"
                    />
                  </div>
                </div>
              </div>
              <div class="row border-top border-secondary">
                <div class="col-12">
                  <div class="form-group">
                    <div class="pt-3">
                        <a href="register.php" class="btn btn-info" style="color: white;">Register</a>
                      <button
                        class="btn btn-success float-end text-white"
                        type="submit"
                        name="masuk"
                        value="masuk"
                      >
                        Login
                      </button>
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
