<?php
include 'koneksi.php';
include 'controller.php';

session_start();
$id_laptop = (int)$_GET['id_laptop'];
$laptop = select("SELECT * FROM laptop WHERE id_laptop = $id_laptop")[0];
$id = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM user WHERE id='$id'");
$penjaga = mysqli_fetch_array($sql);
if($_SESSION['level']==""){
    header("location:index.php");
}elseif($_SESSION['level']=="1"){

include 'head.php';

if (isset($_POST['beli'])){
    if(beli_laptop($_POST) > 0){
        echo "<script>
        alert('Data Pembeli berhasil ditambahkan');
        document.location.href = 'pembelian.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Pembeli gagal ditambahkan');
        document.location.href = 'beli.php';
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
                <h4 class="page-title">Pembelian laptop</h4>
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
                        <div class="col-sm-9">
                            <input
                            hidden
                            readonly=""
                            type="text"
                            class="form-control"
                            id="id_penjaga"
                            name="id_penjaga"
                            value="<?=$penjaga['id']; ?>"
                            />
                        </div>
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
                            value="<?=$penjaga['nama_lengkap']; ?>"
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
                            placeholder="Masukkan Nama pembeli"
                            required=""
                            />
                        </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-sm-9">
                            <input
                            hidden
                            readonly=""
                            type="text"
                            class="form-control"
                            id="id_laptop"
                            name="id_laptop"
                            value="<?=$laptop['id_laptop']; ?>"
                            />
                        </div>
                        <div class="form-group row">
                        <label
                            for="nama_laptop"
                            class="col-sm-3 text-end control-label col-form-label"
                            >Nama laptop</label
                        >
                        <div class="col-sm-9">
                            <input
                            readonly=""
                            type="text"
                            class="form-control"
                            id="nama_laptop"
                            name="nama_laptop"
                            value="<?= $laptop['nama_laptop']; ?>"
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
                            value="<?= $laptop['harga']; ?>"
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
                            <select name="status" id="status" class="select form-select shadow-none" required="">
                                <option value="">Pilih status Pembayaran</option>
                                <option value="Lunas">Lunas</option>
                                <option value="Cicilan">Cicilan</option>
                            </select>
                        </div>
                        </div>
                        <div class="border-top">
                        <div class="card-body">
                            <button 
                            type="submit" 
                            name="beli"
                            class="btn btn-warning">
                            Beli
                            </button>
                            <a href="laptop.php" class="btn btn-danger" style="color: white;">Kembali</a>
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
