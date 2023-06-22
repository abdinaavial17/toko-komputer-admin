<?php
if ($penjaga['foto'] == 0 || $penjaga['foto'] == ""){
?>
    <a href="../assets/profil.jpeg">
    <img src="../assets/profil.jpeg" alt="penjaga" width="20%">
    </a>
<?php
} else {
?>
    <a href="../assets/images<?= $penjaga['foto']; ?>">
    <img src="../assets/images<?= $penjaga['foto']; ?>" alt="penjaga" width="20%">
    </a>
<?php
}
?>
