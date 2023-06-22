<?php
session_start();
include 'koneksi.php';
$id = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM user WHERE id='$id'");
$penjaga = mysqli_fetch_array($sql);
if($_SESSION['level']==""){
  header("location:index.php");
}elseif($_SESSION['level']=="1"){
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
    <meta name="description" content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
    <meta name="robots" content="noindex,nofollow" />
    <title>TOKO KOMPUTER</title>
    <style>
    /* Menyembunyikan elemen audio */
    audio {
      display: none;
    }
  </style>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png" />
    <!-- Custom CSS -->
    <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Fungsi untuk mengubah gambar
            function ubahGambar() {
                // Mendapatkan elemen gambar
                var gambar = document.getElementById('gambar');

                // Mengganti sumber gambar
                gambar.src = '../assets/images/slebew.jpeg';
            }

            // Mendengarkan klik link untuk mengubah gambar
            $('#linkUbahGambar').click(function(e) {
                e.preventDefault();
                ubahGambar();
            });
        });
    </script>
  </head>
  <body>
    <?php
    include 'navbar.php';
    include 'aside.php';
    ?>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Profil pembuat website</h4>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><b>Abdi Naavi'al Umam Suleman</b></h5>
                  <img src="../assets/images/abdi.jpeg" alt="abdi" width="300" heigth="300" id="gambar">
                    <p><br>Nama : Abdi Naavi'al Umam Suleman</p>
                    <p>NIM : F55121029</p>
                    <p>Prodi : S1 - Teknik Informatika</p>
                    <p>Jurusan : Teknologi Informasi</p>
                    <p>Fakultas : Teknik</p>
                    <p>Universitas : Universitas Tadulako <a href="#" id="linkUbahGambar" style="color: white;">Klik</a></p>
                    <audio id="myAudio" controls>
                      <source src="../assets/images/sahara.mp3" type="audio/mp3">
                      Your browser does not support the audio element.
                    </audio>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><b>Muhammad Waliyuddin</b></h5>
                  <img src="../assets/images/wali1.jpg" alt="abdi" width="300" heigth="300">
                    <p><br>Nama : Muhammad Waliyuddin</p>
                    <p>NIM : F55121009</p>
                    <p>Prodi : S1 - Teknik Informatika</p>
                    <p>Jurusan : Teknologi Informasi</p>
                    <p>Fakultas : Teknik</p>
                    <p>Universitas : Universitas Tadulako</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
          Kelompok 10 (Sistem informasi penjualan laptop)
           
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <?php
    include 'script.php';
    ?>
    <script>
    var audio = document.getElementById("myAudio");
    var playLink = document.getElementById("linkUbahGambar");

    playLink.addEventListener("click", function() {
      audio.play();
    });
  </script>
  </body>
</html>
<?php } else{
  header("location:index.php");
} ?>