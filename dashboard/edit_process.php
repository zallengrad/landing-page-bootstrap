<?php
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $id = intval($_POST['id']);
    $judul = mysqli_real_escape_string($db, $_POST['judul']);
    $jumlah_materi = intval($_POST['jumlah_materi']);
    $nama_pemateri = mysqli_real_escape_string($db, $_POST['nama_pemateri']);
    $harga = floatval($_POST['harga']);
    $gambar = $_FILES['foto']['name'];

    // Handle file upload
    if (!empty($gambar)) {
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($gambar);

        if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
            // Update data di database
            $query = "UPDATE kelas SET judul='$judul', jumlah_materi='$jumlah_materi', nama_pemateri='$nama_pemateri', harga='$harga', gambar='$gambar' WHERE id='$id'";
        } else {
            die("Error: Gagal mengupload file gambar.");
        }
    } else {
        // Jika tidak ada gambar yang diupload
        $query = "UPDATE kelas SET judul='$judul', jumlah_materi='$jumlah_materi', nama_pemateri='$nama_pemateri', harga='$harga' WHERE id='$id'";
    }

    // Eksekusi query
    if (mysqli_query($db, $query)) {
        header('Location: dash_adm.php');
        exit;
    } else {
        die("Error: " . mysqli_error($db));
    }
} else {
    die("Error: Metode request tidak valid.");
}
?>
