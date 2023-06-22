<?php
    if ($penjaga['id'] == $_SESSION['id']) {
?>
    <a href="pribadi.php"
    class="btn btn-primary btn-sm"><i class="mdi mdi-eye-outline"></i></a>
<?php
    } else {
?>
    <a href="detail-admin.php?id=<?= $penjaga['id']; ?>"
    class="btn btn-primary btn-sm"><i class="mdi mdi-eye-outline"></i></a>
<?php
    }
?>