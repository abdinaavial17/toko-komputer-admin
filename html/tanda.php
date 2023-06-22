<?php
if ($penjaga['tanggal'] == "0000-00-00"){
?>
    <div class="col-md-6 col-lg-12 col-xlg-3">
        <a href="pribadi.php">
            <div class="card card-hover">
                <div class="box bg-warning text-center">
                <h1 class="font-light text-white">
                    <i class="mdi mdi-alert"></i>
                </h1>
                <h6 class="text-white">Nampaknya, Anda belum melengkapi data diri pribadi anda. Silahkan untuk melengkapi data pribadi anda</h6>
                </div>
            </div>
        </a>
    </div>
    <?php
    } else if ($penjaga['alamat'] == "" || $penjaga['alamat'] == "0"){
        ?>
            <div class="col-md-6 col-lg-12 col-xlg-3">
                <a href="pribadi.php">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                        <h1 class="font-light text-white">
                            <i class="mdi mdi-alert"></i>
                        </h1>
                        <h6 class="text-white">Nampaknya, Anda belum melengkapi data diri pribadi anda. Silahkan untuk melengkapi data pribadi anda</h6>
                        </div>
                    </div>
                </a>
            </div>
            <?php
    }  
    else if ($penjaga['nomor'] == "" || $penjaga['nomor'] == "0"){
        ?>
            <div class="col-md-6 col-lg-12 col-xlg-3">
                <a href="pribadi.php">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                        <h1 class="font-light text-white">
                            <i class="mdi mdi-alert"></i>
                        </h1>
                        <h6 class="text-white">Nampaknya, Anda belum melengkapi data diri pribadi anda. Silahkan untuk melengkapi data pribadi anda</h6>
                        </div>
                    </div>
                </a>
            </div>
            <?php
    }
    else if ($penjaga['foto'] == "" || $penjaga['foto'] == "0"){
        ?>
            <div class="col-md-6 col-lg-12 col-xlg-3">
                <a href="pribadi.php">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                        <h1 class="font-light text-white">
                            <i class="mdi mdi-alert"></i>
                        </h1>
                        <h6 class="text-white">Nampaknya, Anda belum melengkapi data diri pribadi anda. Silahkan untuk melengkapi data pribadi anda</h6>
                        </div>
                    </div>
                </a>
            </div>
            <?php
    }
    else{
    ?>
    <div class="col-md-6 col-lg-12 col-xlg-3">
        <a href="#">
            <div class="card card-hover">
                <div class="box bg-success text-center">
                <h1 class="font-light text-white">
                    <i class="mdi mdi-checkbox-marked-circle-outline"></i>
                </h1>
                <h6 class="text-white">Data diri anda sudah lengkap</h6>
                </div>
            </div>
        </a>
    </div>
    <?php
    }
?>