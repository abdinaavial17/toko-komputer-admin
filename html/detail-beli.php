<?php
include 'koneksi.php';
include 'controller.php';
$id_pembelian = (int)$_GET['id_pembelian'];
$pembelian = select("SELECT * FROM beli WHERE id_pembelian = $id_pembelian")[0];
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
          <h1 class="text-center">Data pembelian</h1>
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_pembelian" value="<?=$pembelian['id_pembelian']; ?>">               
        <div class="card-body">
                        <div class="form-group row">
                        <label
                            for="nama_penjaga"
                            class="col-sm-3 text-end control-label col-form-label"
                            >Nama penjaga toko</label
                        >
                        <div class="col-sm-9">
                            <input
                            readonly=""
                            type="text"
                            class="form-control"
                            id="nama_penjaga"
                            name="nama_penjaga"
                            value="<?= $pembelian['nama_penjaga'];?>"
                            />
                        </div>
                        </div>
                        <div class="form-group row">
                        <label
                            for="nama_pembeli"
                            class="col-sm-3 text-end control-label col-form-label"
                            >Nama Pembeli</label
                        >
                        <div class="col-sm-9">
                            <input
                            type="text"
                            class="form-control"
                            id="nama_pembeli"
                            name="nama_pembeli"
                            value="<?= $pembelian['nama_pembeli'];?>"
                            readonly=""
                            />
                        </div>
                        </div>
                        <div class="form-group row">
                        <label
                            for="laptop_beli"
                            class="col-sm-3 text-end control-label col-form-label"
                            >Nama laptop</label
                        >
                        <div class="col-sm-9">
                            <input
                            readonly=""
                            type="text"
                            class="form-control"
                            id="laptop_beli"
                            name="laptop_beli"
                            value="<?= $pembelian['laptop_beli'];?>"
                            />
                        </div>
                        </div>
                        <div class="form-group row">
                        <label
                            for="harga"
                            class="col-sm-3 text-end control-label col-form-label"
                            >Harga</label
                        >
                        <div class="col-sm-9">
                            <input
                            readonly=""
                            type="text"
                            class="form-control"
                            id="harga"
                            name="harga"
                            value="<?= $pembelian['harga']; ?>"
                            />
                        </div>
                        </div>
                        <div class="form-group row">
                        <label
                            for="tanggal"
                            class="col-sm-3 text-end control-label col-form-label"
                            >Tanggal pembelian</label
                        >
                        <div class="col-sm-9">
                        <input
                            readonly=""
                            type="date"
                            class="form-control"
                            id="tanggal"
                            name="tanggal"
                            value="<?= $pembelian['tanggal']; ?>"
                            />
                        </div>
                        </div>
                        <div class="form-group row">
                        <label
                            for="waktu"
                            class="col-sm-3 text-end control-label col-form-label"
                            >Waktu pembelian</label
                        >
                        <div class="col-sm-9">
                        <input
                            readonly=""
                            type="text"
                            class="form-control"
                            id="waktu"
                            name="waktu"
                            value="<?= $pembelian['waktu']; ?>"
                            />
                        </div>
                        </div>
                        <div class="form-group row">
                        <label
                            for="status"
                            class="col-sm-3 text-end control-label col-form-label"
                            >Status pembelian</label
                        >
                        <div class="col-sm-9">
                        <input
                            readonly=""
                            type="text"
                            class="form-control"
                            id="status"
                            name="status"
                            value="<?= $pembelian['status']; ?>"
                            />
                        </div>
                        </div>
                    </form>
        <div class="text-center">
            <a href="pembelian.php" class="btn btn-primary btn-sm">Kembali</a>
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
    </body>
</html>
<?php } else{
    header("location:index.php");
} ?>
