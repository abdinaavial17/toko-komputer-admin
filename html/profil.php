<?php
    if ($penjaga['foto'] == 0 || $penjaga['foto'] == ""){
?>
    <img src="../assets/profil.jpeg" alt="user" class="rounded-circle" width="31">
<?php } else {
?>
    <img src="../assets/images<?= $penjaga['foto']; ?>" alt="user" class="rounded-circle" width="31">
<?php } 
?>