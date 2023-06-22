<?php
include 'koneksi.php';
include 'controller.php';
$data_laptop = select("SELECT * FROM laptop ORDER BY id_laptop DESC");
session_start();
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
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title">Data Laptop</h1>
                  <a href="tambah.php" class="btn btn-info btn-sm"><i class="mdi mdi-plus-circle-outline"></i> Tambah</a>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered text-center"
                    >
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama laptop</th>
                          <th>Gambar</th>
                          <th>Harga</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($data_laptop as $laptop) : ?>
                        <tr>
                          <td><?= $no++; ?></td>
                          <td width="25%"><?= $laptop['nama_laptop']; ?></td>
                          <td><img src="../assets/images<?= $laptop['gambar']; ?>" alt="laptop" width="50%"></td>
                          <td width="20%">Rp. <?= number_format($laptop['harga'], 0,',','.'); ?></td>
                          <td width="25%">
                              <a href="detail.php?id_laptop=<?= $laptop['id_laptop']; ?>"
                              class="btn btn-primary btn-sm"><i class="mdi mdi-eye-outline"></i></a>
                              <a href="ubah.php?id_laptop=<?= $laptop['id_laptop']; ?>"
                              class="btn btn-success btn-sm" style="color: white;"><i class="mdi mdi-pencil"></i></a>
                              <a href="beli.php?id_laptop=<?= $laptop['id_laptop']; ?>"
                              class="btn btn-warning btn-sm"><i class="mdi mdi-cart-outline"></i></a>
                              <a href="print-laptop.php?id_laptop=<?= $laptop['id_laptop']; ?>"
                              class="btn btn-info btn-sm" target="_blank"><i class="mdi mdi-printer"></i></a>
                              <a href="hapus-laptop.php?id_laptop=<?= $laptop['id_laptop']; ?>"
                              class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></a>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
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
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
      /****************************************
       *       Basic Table                   *
       ****************************************/
      $("#zero_config").DataTable();
    </script>
  </body>
</html>
<?php } else{
  header("location:index.php");
} ?>