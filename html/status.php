<?php
    if ($pembeli['status'] == "Cicilan") {
?>
    <a href="ubah-beli.php?id_pembelian=<?= $pembeli['id_pembelian']; ?>"
    class="btn btn-success btn-sm" style="color: white;"><i class="mdi mdi-pencil"></i></a>
<?php
    } else {
?>
    <a href="#" onclick="myFunction()"
    class="btn btn-secondary btn-sm" style="color: white;"><i class="mdi mdi-pencil"></i></a>
<?php
    }
?>