<?php

    function select($query)
    {
        global $conn;

        $result = mysqli_query($conn, $query);
        $rows = [];

        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }
    
    function buat_laptop($post)
    {
        global $conn;
    
        $nama_laptop    = $post['nama_laptop'];
        $cpu   = $post['cpu'];
        $gpu      = $post['gpu'];
        $storage = $post['storage'];
        $memory = $post['memory'];
        $display   = $post['display'];
        $keyboard   = $post['keyboard'];
        $os   = $post['os'];
        $battery   = $post['battery'];
        $wifi   = $post['wifi'];
        $harga   = $post['harga'];
        $gambar    = upload_file();

        if(!$gambar){
            return false;
        }
        
        $query = "INSERT INTO laptop VALUES(null, '$nama_laptop', '$cpu', '$gpu', '$storage', '$memory', '$display', '$keyboard', '$os', '$battery', '$wifi', '$harga', '$gambar')";
    
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
    }

    function edit_laptop($post)
{
    global $conn;
    $id_laptop = $post['id_laptop'];  
    $nama_laptop    = $post['nama_laptop'];
    $cpu   = $post['cpu'];
    $gpu      = $post['gpu'];
    $storage = $post['storage'];
    $memory = $post['memory'];
    $display   = $post['display'];
    $keyboard   = $post['keyboard'];
    $os   = $post['os'];
    $battery   = $post['battery'];
    $wifi   = $post['wifi'];
    $harga   = $post['harga'];
    $gambarLama  = strip_tags($post['gambarLama']);

    //check upload foto baru atau tidak?
    if($_FILES['gambar']['error']== 4){
        $gambar = $gambarLama;
    } else {
        $gambar = upload_file();
    }
    
    //fungsi update mahasiswa

    // querry ubah data
    $query = "UPDATE laptop SET nama_laptop = '$nama_laptop', cpu = '$cpu', gpu = '$gpu', storage = '$storage',
    memory = '$memory', display = '$display', keyboard = '$keyboard', os = '$os', battery = '$battery',
    wifi = '$wifi', harga = '$harga', gambar = '$gambar' WHERE id_laptop = $id_laptop";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

    function upload_file()
{
    $namaFIle    = $_FILES['gambar']['name'];
    $ukuranFile  = $_FILES['gambar']['size'];
    $error       = $_FILES ['gambar']['error'];
    $tmpName     = $_FILES['gambar']['tmp_name'];

    //check file yang di upload
    $extensifileValid = ['jpg', 'jpeg', 'png'];
    $extensifile      = explode('.', $namaFIle);
    $extensifile      =strtolower(end($extensifile));

    //check format file 
    if (!in_array($extensifile, $extensifileValid)) {
        //pesan gagal
        echo "<script>
        alert('format File Tidak Valid');
        document location.href = 'tambah.php';
        </script>";
    die();
    }

    //check ukuran file
    if ($ukuranFile > 2048000) {
        //pesan gagal
        echo "<script>
        alert('Ukuran max 2mb');
        document location.href = 'tambah.php';
        </script>";
    }

    //generate nama_penjaga file baru
    $namaFIleBaru = uniqid();
    $namaFIleBaru .='.';
    $namaFIleBaru .= $extensifile;

    //pindahkan ke lokal folder
    move_uploaded_file($tmpName, '../assets/images'. $namaFIleBaru);
    return $namaFIleBaru;

}

function hapus_laptop($id_laptop)
{
    global $conn;

    $query = "DELETE FROM laptop WHERE id_laptop = $id_laptop";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function beli_laptop($post) {
    global $conn;

    $id_penjaga   = $post['id_penjaga'];
    $nama_penjaga   = $post['nama_penjaga'];
    $nama_pembeli   = $post['nama_pembeli'];
    $id_laptop   = $post['id_laptop'];
    $nama_laptop   = $post['nama_laptop'];
    $harga  = $post['harga'];
    $status  = $post['status'];

    // querry tambah data
    $query = "INSERT INTO beli VALUES(null, '$id_penjaga', '$nama_penjaga', '$nama_pembeli', '$id_laptop', '$nama_laptop', '$harga', CURDATE(), NOW(), '$status')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah_beli($post)
{
    global $conn;
    
    $id_pembelian = $post['id_pembelian'];
    $status  = $post['status'];

    // querry ubah data
    $query = "UPDATE beli SET status = '$status' WHERE id_pembelian = $id_pembelian";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus_beli($id_pembelian)
{
    global $conn;

    $query = "DELETE FROM beli WHERE id_pembelian = $id_pembelian";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function edit_pribadi($post)
{
    global $conn;
    $id = $post['id'];  
    $nama_lengkap    = $post['nama_lengkap'];
    $tanggal   = $post['tanggal'];
    $alamat      = $post['alamat'];
    $nomor = $post['nomor'];
    $fotoLama  = strip_tags($post['fotoLama']);

    //check upload foto baru atau tidak?
    if($_FILES['foto']['error']== 4){
        $foto = $fotoLama;
    } else {
        $foto = upload_foto_profil();
    }
    
    $query = "UPDATE user SET nama_lengkap = '$nama_lengkap', tanggal = '$tanggal', alamat = '$alamat', nomor = '$nomor', foto = '$foto' WHERE id = $id";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function edit_password($post)
{
    global $conn;
    $id = $post['id'];  
    $email = $post['email'];
    $password = $post['password'];
    $password = md5($password);
    
    $query = "UPDATE user SET email = '$email', password = '$password' WHERE id = $id";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload_foto_profil()
{
    $namaFIle    = $_FILES['foto']['name'];
    $ukuranFile  = $_FILES['foto']['size'];
    $error       = $_FILES ['foto']['error'];
    $tmpName     = $_FILES['foto']['tmp_name'];

    //check file yang di upload
    $extensifileValid = ['jpg', 'jpeg', 'png'];
    $extensifile      = explode('.', $namaFIle);
    $extensifile      =strtolower(end($extensifile));

    //check format file 
    if (!in_array($extensifile, $extensifileValid)) {
        //pesan gagal
        echo "<script>
        alert('format File Tidak Valid');
        document location.href = 'tambah.php';
        </script>";
    die();
    }

    //check ukuran file
    if ($ukuranFile > 2048000) {
        //pesan gagal
        echo "<script>
        alert('Ukuran max 2mb');
        document location.href = 'tambah.php';
        </script>";
    }

    //generate nama_penjaga file baru
    $namaFIleBaru = uniqid();
    $namaFIleBaru .='.';
    $namaFIleBaru .= $extensifile;

    //pindahkan ke lokal folder
    move_uploaded_file($tmpName, '../assets/images'. $namaFIleBaru);
    return $namaFIleBaru;

}
function buat_akun($post)
{
    global $conn;
    $nama_lengkap    = $post['nama_lengkap'];
    $email      = $post['email'];
    $password   = $post['password'];
    $level      = 1;

    // querry tambah data
    $query = "INSERT INTO user VALUES(null, '$nama_lengkap', '$email', md5('$password'), '$level')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>