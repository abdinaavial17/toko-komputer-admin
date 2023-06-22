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

if (isset($_POST['tambah'])){
    if(buat_laptop($_POST) > 0){
        echo "<script>
        alert('Data Laptop berhasil ditambahkan');
        document.location.href = 'laptop.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Laptop gagal ditambahkan');
        document.location.href = 'tambah.php';
        </script>";
    }
}
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
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Tambah laptop</h4>
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
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group row">
                      <label
                        for="nama_laptop"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Nama Laptop</label
                      >
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="nama_laptop"
                          name="nama_laptop"
                          placeholder="Masukkan nama laptop..."
                          required=""
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
                          type="text"
                          class="form-control"
                          id="cpu"
                          name="cpu"
                          placeholder="Masukan jenis CPU"
                          required=""
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
                          type="text"
                          class="form-control"
                          id="gpu"
                          name="gpu"
                          placeholder="Masukan jenis GPU"
                          required=""
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
                          type="text"
                          class="form-control"
                          id="storage"
                          name="storage"
                          placeholder="Masukan jumlah storage"
                          required=""
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
                          type="text"
                          class="form-control"
                          id="memory"
                          name="memory"
                          placeholder="Masukan Jumlah Memory"
                          required=""
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
                          required=""
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
                          type="text"
                          class="form-control"
                          id="keyboard"
                          name="keyboard"
                          placeholder="Masukan Jenis Keyboard"
                          required=""
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
                          type="text"
                          class="form-control"
                          id="os"
                          name="os"
                          placeholder="Masukan Jenis OS"
                          required=""
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
                          type="text"
                          class="form-control"
                          id="battery"
                          name="battery"
                          placeholder="Masukan Jenis Battery"
                          required=""
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
                          type="text"
                          class="form-control"
                          id="wifi"
                          name="wifi"
                          placeholder="Masukan Jenis Wifi"
                          required=""
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
                          type="number"
                          class="form-control"
                          id="harga"
                          name="harga"
                          placeholder="Masukan Harga Laptop"
                          required=""
                        />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="gambar"
                        class="col-sm-3 text-end control-label col-form-label"
                        >Gambar Laptop</label
                      >
                      <div class="col-sm-9">
                      <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Foto...." required="">
                      </div>
                    </div>
                  </div>
                  <div class="border-top">
                    <div class="card-body">
                      <button 
                      type="submit" 
                      name="tambah"
                      class="btn btn-primary">
                        Tambah
                      </button>
                    </div>
                  </div>
                </form>
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
    <!-- This Page JS -->
    <script src="../assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="../dist/js/pages/mask/mask.init.js"></script>
    <script src="../assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="../assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="../assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="../assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="../assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="../assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="../assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="../assets/libs/quill/dist/quill.min.js"></script>
    <script>
      //***********************************//
      // For select 2
      //***********************************//
      $(".select2").select2();

      /*colorpicker*/
      $(".demo").each(function () {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
          control: $(this).attr("data-control") || "hue",
          position: $(this).attr("data-position") || "bottom left",

          change: function (value, opacity) {
            if (!value) return;
            if (opacity) value += ", " + opacity;
            if (typeof console === "object") {
              console.log(value);
            }
          },
          theme: "bootstrap",
        });
      });
      /*datwpicker*/
      jQuery(".mydatepicker").datepicker();
      jQuery("#datepicker-autoclose").datepicker({
        autoclose: true,
        todayHighlight: true,
      });
      var quill = new Quill("#editor", {
        theme: "snow",
      });
    </script>
  </body>
</html>
<?php } else{
  header("location:index.php");
} ?>
