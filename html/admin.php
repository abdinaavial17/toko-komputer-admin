<?php
session_start();
include 'koneksi.php';
$id = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM user WHERE id='$id'");
$penjaga = mysqli_fetch_array($sql);
if($_SESSION['level']==""){
  header("location:index.php");
}elseif($_SESSION['level']=="1"){
include 'head.php';
?>

  <body>
    <?php
    include 'navbar.php';
    include 'aside.php';
    ?>
      
      
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper" >
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Dashboard</h4>
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
          <div class="content-wrapper">
            <section class="content">
              <div class="row">
                <div class="col-xs-12">
                  <div class="callout callout-info">
                    <h3 class="text-center">Selamat datang <?=$penjaga['nama_lengkap']; ?>!<br></h3>
                  </div>
                </div>
              </div>
            </section>  
          </div><br><br>
          <div class="row">
            <div class="col-md-6 col-lg-4 col-xlg-3">
              <a href="laptop.php">
                <div class="card card-hover">
                  <div class="box bg-info text-center">
                    <h1 class="font-light text-white">
                      <i class="mdi mdi-monitor"></i>
                    </h1>
                    <h6 class="text-white">Data laptop</h6>
                    <h6 class="text-white">
                    <?php
                    $q=mysqli_query($conn, "SELECT * FROM laptop");
                    $data=mysqli_num_rows($q);
                    echo $data; ?> buah laptop
                    </h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xlg-3">
              <a href="pembelian.php">
                <div class="card card-hover">
                  <div class="box bg-danger text-center">
                    <h1 class="font-light text-white">
                      <i class="mdi mdi-cart-outline"></i>
                    </h1>
                    <h6 class="text-white">Data pembeli</h6>
                    <h6 class="text-white">
                    <?php
                    $q=mysqli_query($conn, "SELECT * FROM beli");
                    $data=mysqli_num_rows($q);
                    echo $data; ?> orang
                    </h6>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 col-lg-4 col-xlg-3">
              <a href="penjaga.php">
                <div class="card card-hover">
                  <div class="box bg-dark text-center">
                    <h1 class="font-light text-white">
                      <i class="mdi mdi-account-multiple"></i>
                    </h1>
                    <h6 class="text-white">Data penjaga toko</h6>
                    <h6 class="text-white">
                    <?php
                    $q=mysqli_query($conn, "SELECT * FROM user");
                    $data=mysqli_num_rows($q);
                    echo $data; ?> orang
                    </h6>
                  </div>
                </div>
              </a>
            </div>
            <?php include 'tanda.php'; ?>
            <div class="col-md-6 col-lg-6 col-xlg-3">
              <a href="#">
                <div class="card card-hover">
                  <div class="box bg-dark text-center">
                    <h1 class="font-light text-white">
                      <i class="mdi mdi-trending-up"></i>
                    </h1>
                    <h6 class="text-white">Total penjualan laptop</h6>
                    <h6 class="text-white">
                    <?php
                    $query = "SELECT SUM(harga) AS total FROM beli";
                    $result = $conn->query($query);
                    
                    // Periksa hasil query
                    if ($result) {
                        $row = $result->fetch_assoc();
                        $total = $row['total'];
                        $total_formatted = number_format($total, 0,',','.');
                        echo "Rp. " . $total_formatted;
                    } else {
                        echo "Error: " . $connection->error;
                    }
                    ?>
                    </h6>
                  </div>
                </div>
              </a>
            </div>
            <?php include 'progres.php'; ?>
          </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center" style=" margin-top: auto;">
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
  </body>
</html>
<?php } else{
  header("location:index.php");
} ?>