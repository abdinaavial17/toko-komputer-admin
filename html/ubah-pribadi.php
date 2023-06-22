    <?php
    include 'koneksi.php';
    include 'controller.php';
    session_start();
    $id = $_SESSION['id'];
    $sql = mysqli_query($conn, "SELECT * FROM user WHERE id='$id'");
    $penjaga = mysqli_fetch_array($sql);
    if (isset($_POST['ubah-profil'])){
    if(edit_pribadi($_POST) > 0){
        echo "<script>
        alert('Data pribadi berhasil diubah');
        document.location.href = 'pribadi.php';
        </script>";
    } else {
        echo "<script>
        alert('Data pribadi gagal diubahkan');
        document.location.href = 'pribadi.php';
        </script>";
    }
    }
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
            <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Ubah data pribadi</h4>
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
                            type="tel"
                            class="form-control"
                            id="nomor"
                            name="nomor"
                            placeholder="Masukan jumlah nomor"
                            value="<?= $penjaga['nomor']; ?>"
                            />
                        </div>
                        </div>
                        <div class="form-group row">
                        <label
                            for="foto"
                            class="col-sm-3 text-end control-label col-form-label"
                            >Foto profil</label
                        >
                        <div class="col-sm-9">
                        <input type="file" class="form-control" id="foto" name="foto" placeholder="Foto....">
                        </div>
                        <h3><br>
                            foto sebelumnya
                        </h3> 
                        </div>
                        <?php include'foto.php'; ?>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                        <button 
                        type="submit" 
                        name="ubah-profil"
                        class="btn btn-primary">
                            Ubah data profil
                        </button>
                        <button class="btn btn-danger">
                        <a href="pribadi.php" style="color: white;">Kembali</a>
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