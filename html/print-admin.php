<?php
include 'koneksi.php';
include 'controller.php';
$id = (int)$_GET['id'];
$penjaga = select("SELECT * FROM user WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$penjaga['nama_lengkap']; ?></title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
</head>
<body>
    <center>
    <b class="logo-icon ps-2">
        <img src="../assets/images/logo-icon.png" alt="homepage" class="light-logo" width="25"/>
    </b>
    <span class="logo-text ms-2">
        <img src="../assets/images/toko-komputer.png" alt="homepage" class="light-logo" width="25%"/>
    </span>
    <br><br><br>
    <?php include 'foto.php'; ?>
    <br><br><br><br>
    <table width="70%">
        <tbody>
            <tr>
                <td style="padding: 5px 20px 20px 20px;">Nama penjaga toko</td>
                <td style="padding: 5px 20px 20px 20px;">: <?=$penjaga['nama_lengkap']; ?></td>
            </tr>
            <tr>
                <td style="padding: 5px 20px 20px 20px;">Tanggal lahir</td>
                <td style="padding: 5px 20px 20px 20px;">: <?=$penjaga['tanggal']; ?></td>
            </tr>
            <tr>
                <td style="padding: 5px 20px 20px 20px;">Alamat</td>
                <td style="padding: 5px 20px 20px 20px;">: <?=$penjaga['alamat']; ?></td>
            </tr>
            <tr>
                <td style="padding: 5px 20px 20px 20px;">Nomor telepon</td>
                <td style="padding: 5px 20px 20px 20px;">: <?=$penjaga['nomor']; ?></td>
            </tr>
        </tbody>
    </table>
    </center>
    <script>
         // Mengubah orientasi halaman menjadi lanskap
var style = document.createElement('style');
style.innerHTML = '@page { size: portrait; }';
document.head.appendChild(style);

// Memanggil fungsi print
window.print();
    </script>
</body>
</html>