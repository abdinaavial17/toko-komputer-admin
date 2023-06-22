<?php
include 'koneksi.php';
include 'controller.php';
$id_laptop = (int)$_GET['id_laptop'];
$laptop = select("SELECT * FROM laptop WHERE id_laptop = $id_laptop")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $laptop['nama_laptop']; ?></title>
</head>
<body>
    <center>
    <b class="logo-icon ps-2">
        <img src="../assets/images/logo-icon.png" alt="homepage" class="light-logo" width="25"/>
    </b>
    <span class="logo-text ms-2">
        <img src="../assets/images/toko-komputer.png" alt="homepage" class="light-logo" width="25%"/>
    </span><br><br><br>
        <h1><?= $laptop['nama_laptop']; ?></h1>
    <br>
    <img src="../assets/images<?= $laptop['gambar']; ?>" alt="laptop" width="30%">
    <h3>Spesifikasi laptop</h3>
    <table width="80%">
            <tr>
                <td style="padding: 5px 20px 20px 20px;">CPU</td>
                <td style="padding: 5px 20px 20px 20px;">: <?=$laptop['cpu']; ?></td>
            </tr>
            <tr>
                <td style="padding: 5px 20px 20px 20px;">GPU</td>
                <td style="padding: 5px 20px 20px 20px;">: <?=$laptop['gpu']; ?></td>
            </tr>
            <tr>
                <td style="padding: 5px 20px 20px 20px;">Storage</td>
                <td style="padding: 5px 20px 20px 20px;">: <?=$laptop['storage']; ?></td>
            </tr>
            <tr>
                <td style="padding: 5px 20px 20px 20px;">Memory</td>
                <td style="padding: 5px 20px 20px 20px;">: <?=$laptop['memory']; ?></td>
            </tr>
            <tr>
                <td style="padding: 5px 20px 20px 20px;">Display</td>
                <td style="padding: 5px 20px 20px 20px;">: <?=$laptop['display']; ?></td>
            </tr>
            <tr>
                <td style="padding: 5px 20px 20px 20px;">Keyboard</td>
                <td style="padding: 5px 20px 20px 20px;">: <?=$laptop['keyboard']; ?></td>
            </tr>
            <tr>
                <td style="padding: 5px 20px 20px 20px;">Operation system</td>
                <td style="padding: 5px 20px 20px 20px;">: <?=$laptop['os']; ?></td>
            </tr>
            <tr>
                <td style="padding: 5px 20px 20px 20px;">Battery</td>
                <td style="padding: 5px 20px 20px 20px;">: <?=$laptop['battery']; ?></td>
            </tr>
            <tr>
                <td style="padding: 5px 20px 20px 20px;">Wifi</td>
                <td style="padding: 5px 20px 20px 20px;">: <?=$laptop['wifi']; ?></td>
            </tr>
            <tr>
                <td style="padding: 5px 20px 20px 20px;">Harga</td>
                <td style="padding: 5px 20px 20px 20px;">: Rp. <?= number_format($laptop['harga'], 0,',','.'); ?></td>
            </tr>
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