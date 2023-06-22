<?php
include 'koneksi.php';
include 'controller.php';
$id_laptop = (int)$_GET['id_laptop'];
$laptop = select("SELECT * FROM laptop WHERE id_laptop = $id_laptop")[0];
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
          <h1 class="text-center"><?= $laptop['nama_laptop']; ?></h1><br><hr>
          <center>
            <a href="../assets/images<?= $laptop['gambar']; ?>">
              <img src="../assets/images<?= $laptop['gambar']; ?>" alt="laptop" width="50%">
            </a>
          </center><hr>
          <h1 class="text-center">Spesifikasi</h1>
          <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
            <div class="card-body">
            <div class="form-group row">
                          <div class="col-sm-9">
                              <input readonly=""  name="id" type="hidden" class="form-control"  id="" value="<?= $_SESSION['id']?>">
                          </div>
                      </div>
                    <div class="form-group row">
                      <label
                        for="nama_laptop"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Nama Laptop</label
                      >
                      <div class="col-sm-9">
                        <input
                        readonly
                          type="text"
                          class="form-control"
                          id="nama_laptop"
                          name="nama_laptop"
                          placeholder="Masukkan nama laptop..."
                          value="<?= $laptop['nama_laptop']; ?>"
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="cpu"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Nama CPU</label
                      >
                      <div class="col-sm-9">
                        <input
                        readonly
                          type="text"
                          class="form-control"
                          id="cpu"
                          name="cpu"
                          placeholder="Masukan jenis CPU"
                          value="<?= $laptop['cpu']; ?>"
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="gpu"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Nama GPU</label
                      >
                      <div class="col-sm-9">
                        <input
                        readonly
                          type="text"
                          class="form-control"
                          id="gpu"
                          name="gpu"
                          placeholder="Masukan jenis GPU"
                          value="<?= $laptop['gpu']; ?>"
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="Storage"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Jumlah storage</label
                      >
                      <div class="col-sm-9">
                        <input
                        readonly
                          type="text"
                          class="form-control"
                          id="storage"
                          name="storage"
                          placeholder="Masukan jumlah storage"
                          value="<?= $laptop['storage']; ?>"
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="memory"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Jumlah Memory</label
                      >
                      <div class="col-sm-9">
                        <input
                        readonly
                          type="text"
                          class="form-control"
                          id="memory"
                          name="memory"
                          placeholder="Masukan Jumlah Memory"
                          value="<?= $laptop['memory']; ?>"
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="display"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Jenis Display</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="display"
                          name="display"
                          placeholder="Masukan Jenis Display"
                          value="<?= $laptop['display']; ?>"
                          readonly
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="keyboard"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Jenis Keyboard</label
                      >
                      <div class="col-sm-9">
                        <input
                        readonly
                          type="text"
                          class="form-control"
                          id="keyboard"
                          name="keyboard"
                          placeholder="Masukan Jenis Keyboard"
                          value="<?= $laptop['keyboard']; ?>"
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="os"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Jenis OS</label
                      >
                      <div class="col-sm-9">
                        <input
                        readonly
                          type="text"
                          class="form-control"
                          id="os"
                          name="os"
                          placeholder="Masukan Jenis OS"
                          value="<?= $laptop['os']; ?>"
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="battery"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Jenis Battery</label
                      >
                      <div class="col-sm-9">
                        <input
                        readonly
                          type="text"
                          class="form-control"
                          id="battery"
                          name="battery"
                          placeholder="Masukan Jenis Battery"
                          value="<?= $laptop['battery']; ?>"
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="wifi"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Jenis Wifi</label
                      >
                      <div class="col-sm-9">
                        <input
                        readonly
                          type="text"
                          class="form-control"
                          id="wifi"
                          name="wifi"
                          placeholder="Masukan Jenis Wifi"
                          value="<?= $laptop['wifi']; ?>"
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="harga"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Harga Laptop</label
                      >
                      <div class="col-sm-9">
                        <input
                        readonly
                          type="number"
                          class="form-control"
                          id="harga"
                          name="harga"
                          placeholder="Masukan Harga Laptop"
                          value="<?= $laptop['harga']; ?>"
                        />
                      </div>
                    </div>
            </div>
          </form>
          <div class="text-center">
            <a href="laptop.php" class="btn btn-primary btn-sm">Kembali</a>
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