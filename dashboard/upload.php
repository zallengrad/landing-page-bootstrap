<?php

include "../config.php";

$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
$judul = $_POST['judul'];
$jumlah_materi = $_POST['jumlah_materi'];
$nama_pemateri = $_POST['nama_pemateri'];
$harga = $_POST['harga'];

move_uploaded_file($file_tmp, 'upload/'.$foto);

$query = "INSERT INTO kelas SET
                judul = '$judul',
                jumlah_materi = '$jumlah_materi',
                nama_pemateri = '$nama_pemateri',
                harga = '$harga',
                gambar = '$foto'
";
mysqli_query($db, $query) 
// or die("SQL Error". mysqli_error())
;

header('location:dash_adm.php');
 ?>