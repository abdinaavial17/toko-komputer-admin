<?php
include 'koneksi.php';
include 'controller.php';

$id_laptop = (int)$_GET['id_laptop'];

if (hapus_laptop($id_laptop) > 0) {
    echo "<script>
        alert('Data laptop Berhasil Dihapus');
        document.location.href = 'laptop.php';
        </script>";
} else {
    echo "<script>
        alert('Data laptop Gagal Dihapus');
        document.location.href = 'laptop.php';
        </script>";
}
?>