<?php 

include "../config.php";

$success = ''; // Variabel untuk menyimpan status keberhasilan

if ($db->connect_error) {
  die("Koneksi gagal: " . $db->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['save_kelas'])) {
  $judul = htmlspecialchars(strip_tags(trim($_POST['judul'])));
  $jumlah_materi = intval($_POST['jumlah_materi']);
  $nama_pemateri = htmlspecialchars(strip_tags(trim($_POST['nama_pemateri'])));
  $harga = floatval($_POST['harga']);
  
  $stmt = $db->prepare("INSERT INTO kelas (judul, jumlah_materi, nama_pemateri, harga) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("sisi", $judul, $jumlah_materi, $nama_pemateri, $harga);
  
  if ($stmt->execute()) {
      echo json_encode(['success' => true, 'message' => 'Kelas berhasil ditambahkan!']);
  } else {
      echo json_encode(['success' => false, 'message' => $db->error]);
  }
  $stmt->close();
  
}


$sql = "SELECT * FROM kelas";
$result = $db->query($sql);

$kelas = [];
while ($row = $result->fetch_assoc()) {
    $kelas[] = $row;
}
?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />

    <title>Rosok Coding</title>
    <style>
      body {
        padding-top: 56px;
      }
      .jumbotron {
        background-color: cadetblue;
      }
      .background-header {
        position: relative;
        background-image: url(images/banner1.jpg);
        background-color: #fafbfc;
        height: 100vh;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 0;
      }

      .background-header::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Set opacity to darken the background */
        z-index: -1; /* Make sure overlay is above background but below text */
      }

      .button-primer {
        background-color: #00bd8e;
        border-color: #0b9b6b;
        color: #fff;
        text-shadow: 0px 0px;
      }
      .button-primer:hover {
        background-color: #038c6a;
        color: #fff;
        text-shadow: 0px 0px;
      }
      .service-style {
        margin-top: 15px;
        background-color: #fafbfc;
      }

      h2:before,
      h2:after {
        background-color: #0b9b6b;
        content: "";
        display: inline-block;
        height: 1px;
        position: relative;
        vertical-align: middle;
        width: 25%;
      }
      h2:before {
        right: 0.5em;
        margin-left: -50%;
      }
      h2:after {
        left: 0.5em;
        margin-right: -50%;
      }

      .button-sekunder {
        background-color: transparent;
        border-color: #0b9b6b;
        color: #0b9b6b;
      }
      .button-sekunder:hover {
        background-color: #0b9b6b;
        border-color: #00bd8e;
        color: #fff;
      }
      .cover {
        background: no-repeat center/cover;
      }
      .about-description {
        max-height: 400px; /* Batasi tinggi maksimum */
        overflow: auto; /* Tampilkan scrollbar jika konten terlalu panjang */
        text-align: justify;
      }
    </style>
  </head>
  <body>
     <!-- Nabar -->
     <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
      <div class="container">
        <a href="#" class="navbar-brand"><img src="../images/logorc.png" alt="" height="30" /></a>
        <div class="navbar" id="navbarContent">
          <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="logout.php" class="btn btn-danger btn-md mx-2" role="button">Logout</a>
                </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- kelas -->
    <section id="product" class="container mt-5">
      <div class="row col-md-12">
        <div class="col-md-12 pb-4">
          <h2 class="display-4 text-center mb-1" style="margin-top: 5px !important">Tambah Kelas</h2>
        </div>

    <!-- FORM -->
                     <form enctype="multipart/form-data" method="POST" class="col-md-8 mx-auto" action="upload.php">
                          <div class="mb-3">
                              <label for="judul" class="col-form-label">Judul Kelas:</label>
                              <input type="text" class="form-control" id="judul" name="judul" required>
                          </div>
                          <div class="mb-3">
                              <label for="jumlah_materi" class="col-form-label">Jumlah Materi:</label>
                              <input type="number" class="form-control" id="jumlah_materi" name="jumlah_materi" required>
                          </div>
                          <div class="mb-3">
                              <label for="nama_pemateri" class="col-form-label">Nama Pemateri:</label>
                              <input type="text" class="form-control" id="nama_pemateri" name="nama_pemateri" required>
                          </div>
                          <div class="mb-3">
                              <label for="harga" class="col-form-label">Harga:</label>
                              <input type="number" class="form-control" id="harga" name="harga" placeholder="3 Digit terakhir Tidak Ditulis, Ex : 100 ( 100.000 )" required>
                          </div>
                          <div class="mb-3">
                              <label class="form-label">Upload Gambar:</label>
                              <input type="file" id="gambar" name="foto" class="form-control"><br><br>
                          </div>
                          <div class="modal-footer mb-5">
                              <button type="submit" name="save_kelas" class="btn btn-primary">Tambah Kelas</button>
                          </div>
                      </form>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-qn8XuUnDQVeq0phcYZmgj3EhryHgA5Dv5j9tpHxlL8+I76XcejIkUp3Dy4yI3u5C" crossorigin="anonymous"></script>
  </body>
</html>
