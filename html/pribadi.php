<?php
include 'koneksi.php';
include 'controller.php';
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
          <h1 class="text-center"><?=$penjaga['nama_lengkap']; ?></h1><br><hr>
          <center>
            <?php include 'foto.php'; ?>
          </center><hr>
          <h1 class="text-center">Profil penjaga toko</h1>
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $_SESSION['id']?>">   
            <input type="hidden" name="fotoLama" value="<?=$penjaga['foto']; ?>">       
            <div class="card-body">
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <input readonly=""  name="id" type="hidden" class="form-control"  id="" value="<?= $_SESSION['id']?>">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label
                            for="nama_lengkap"
                            class="col-sm-3 text-end control-label col-form-label"
                            >Nama lengkap</label
                        >
                        <div class="col-sm-9">
                            <input
                            readonly
                            type="text"
                            class="form-control"
                            id="nama_lengkap"
                            name="nama_lengkap"
                            placeholder="Masukkan nama laptop..."
                            value="<?= $penjaga['nama_lengkap']; ?>"
                            />
                        </div>
                        </div>
                        <div class="form-group row">
                        <label
                            for="tanggal"
                            class="col-sm-3 text-end control-label col-form-label"
                            >Tanggal lahir</label
                        >
                        <div class="col-sm-9">
                            <input
                            readonly
                            type="date"
                            class="form-control"
                            id="tanggal"
                            name="tanggal"
                            placeholder="Masukan jenis tanggal"
                            value="<?= $penjaga['tanggal']; ?>"
                            />
                        </div>
                        </div>
                        <div class="form-group row">
                        <label
                            for="alamat"
                            class="col-sm-3 text-end control-label col-form-label"
                            >Alamat</label
                        >
                        <div class="col-sm-9">
                            <input
                            readonly
                            type="text"
                            class="form-control"
                            id="alamat"
                            name="alamat"
                            placeholder="Masukan jenis alamat"
                            value="<?= $penjaga['alamat']; ?>"
                            />
                        </div>
                        </div>
                        <div class="form-group row">
                        <label
                            for="nomor"
                            class="col-sm-3 text-end control-label col-form-label"
                            >Nomor telepon</label
                        >
                        <div class="col-sm-9">
                            <input
                            readonly
                            type="tel"
                            class="form-control"
                            id="nomor"
                            name="nomor"
                            placeholder="Masukan jumlah nomor"
                            value="<?= $penjaga['nomor']; ?>"
                            />
                        </div>
                        </div>
                        <div class="text-center">
            <a href="ubah-pribadi.php?=<?= $penjaga['id']; ?>" class="btn btn-primary btn-sm">Ubah profil</a>
            <a href="ubah-password.php?=<?= $penjaga['id']; ?>" class="btn btn-primary btn-sm">Ubah Password</a>
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