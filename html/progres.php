<?php
$id_penjaga = $penjaga['id'];
$q=mysqli_query($conn, "SELECT * FROM beli WHERE id_penjaga = '$id_penjaga'");
$data=mysqli_num_rows($q);
if ($data == 0) {
    ?>
<div class="col-md-6 col-lg-6 col-xlg-3">
<a href="laptop.php">
    <div class="card card-hover">
        <div class="box bg-danger text-center">
        <h1 class="font-light text-white">
            <i class="mdi mdi-account"></i>
        </h1>
        <h6 class="text-white">Sepertinya anda belum melayani siapapun, ayo kembali bekerja</h6><br>
        </div>
    </div>
</a>
</div>
<?php
} else {
?>
<div class="col-md-6 col-lg-6 col-xlg-3">
<a href="#">
    <div class="card card-hover">
        <div class="box bg-secondary text-center">
        <h1 class="font-light text-white">
            <i class="mdi mdi-account"></i>
        </h1>
        <h6 class="text-white">Jumlah pelanggan yang sudah anda layani</h6>
        <h6 class="text-white"><?php echo $data; ?> orang</h6>
        </div>
    </div>
</a>
</div>
<?php
} ?>
