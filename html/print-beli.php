<?php
include 'koneksi.php';
include 'controller.php';
$id_pembelian = (int)$_GET['id_pembelian'];
$beli = select("SELECT * FROM beli WHERE id_pembelian = $id_pembelian")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Pembelian</title>
</head>
<body>
    <center>
    <b class="logo-icon ps-2">
        <img src="../assets/images/logo-icon.png" alt="homepage" class="light-logo" width="25"/>
    </b>
    <span class="logo-text ms-2">
        <img src="../assets/images/toko-komputer.png" alt="homepage" class="light-logo" width="25%"/>
    </span>
    <br><br><br><br>
    <table width="70%">
        <tbody>
            <tr>
                <td style="padding: 5px 20px 20px 20px;">ID pembelian</td>
                <td style="padding: 5px 20px 20px 20px;">: <?=$beli['id_pembelian']; ?></td>
            </tr>
            <tr>
                <td style="padding: 5px 20px 20px 20px;">Nama pembeli</td>
                <td style="padding: 5px 20px 20px 20px;">: <?=$beli['nama_pembeli']; ?></td>
            </tr>
            <tr>
                <td style="padding: 5px 20px 20px 20px;">Laptop beli</td>
                <td style="padding: 5px 20px 20px 20px;">: <?=$beli['laptop_beli']; ?></td>
            </tr>
            <tr>
                <td style="padding: 5px 20px 20px 20px;">Harga</td>
                <td style="padding: 5px 20px 20px 20px;">: Rp. <?= number_format($beli['harga'], 0,',','.'); ?></td>
            </tr>
            <tr>
                <td style="padding: 5px 20px 20px 20px;">Tanggal pembelian</td>
                <td style="padding: 5px 20px 20px 20px;">: <?=$beli['tanggal']; ?></td>
            </tr>
            <tr>
                <td style="padding: 5px 20px 20px 20px;">Waktu pembelian</td>
                <td style="padding: 5px 20px 20px 20px;">: <?=$beli['waktu']; ?></td>
            </tr>
            <tr>
                <td style="padding: 5px 20px 20px 20px;">Status</td>
                <td style="padding: 5px 20px 20px 20px;">: <?=$beli['status']; ?></td>
            </tr>
        </tbody>
    </table>
    </center><br><br>
    <center>
        <p>Dengan pembelian laptop ini, maka laptop yang sudah dibeli tidak dapat dikembalikan lagi</p>
    </center>
    <br><br>
    <div style="display: flex; justify-content: space-between;">
    <div>
        <p><b>Penjaga toko</b></p><br><br><br>
        <p><?=$beli['nama_penjaga']; ?></p>
    </div>
    <div>
        <p><b>Pembeli laptop</b></p><br><br><br>
        <p><?=$beli['nama_pembeli']; ?></p>
    </div>
    </div>
    
    <script>// Mengubah orientasi halaman menjadi lanskap
var style = document.createElement('style');
style.innerHTML = '@page { size: landscape; }';
document.head.appendChild(style);

// Memanggil fungsi print
window.print();
    </script>
</body>
</html>