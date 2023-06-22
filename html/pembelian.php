<?php
include 'koneksi.php';
include 'controller.php';
$data_pembeli = select("SELECT * FROM beli ORDER BY id_pembelian DESC");
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
                  <h1 class="card-title">Data pembelian</h1>
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-striped table-bordered text-center"
                    >
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Pembeli</th>
                          <th>Laptop yang dibeli</th>
                          <th>Harga</th>
                          <th>Penjaga Toko</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($data_pembeli as $pembeli) : ?>
                        <tr>
                          <td><?= $no++; ?></td>
                          <td width="20%"><?= $pembeli['nama_pembeli']; ?></td>
                          <td width="20%"><?= $pembeli['laptop_beli']; ?></td>
                          <td width="20%">Rp. <?= number_format($pembeli['harga'], 0,',','.'); ?></td>
                          <td width="20%"><?= $pembeli['nama_penjaga']; ?></td>
                          <td width="20%">
                              <a href="detail-beli.php?id_pembelian=<?= $pembeli['id_pembelian']; ?>"
                              class="btn btn-primary btn-sm"><i class="mdi mdi-eye-outline"></i></a>
                              <?php include 'status.php'; ?>
                              <a href="print-beli.php?id_pembelian=<?= $pembeli['id_pembelian']; ?>"
                              class="btn btn-info btn-sm" target="_blank"><i class="mdi mdi-printer"></i></a>
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
    <script>
    function myFunction() {
      alert("Data tersebut sudah lunas");
    }
    </script>
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