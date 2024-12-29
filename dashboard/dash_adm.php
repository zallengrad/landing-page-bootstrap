<?php 

include "../config.php";

if ($db->connect_error) {
  die("Koneksi gagal: " . $db->connect_error);
}


$data = mysqli_query($db, "SELECT * FROM kelas order by id DESC");

$kelas = [];
while ($row = mysqli_fetch_array($data)) {
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
      .row {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
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
      <div class="row col-12">
        <div class="col-12 pb-4">
          <h2 class="display-4 text-center mb-1" style="margin-top: 5px">Daftar Kelas</h2>
        </div>

      
        <div class="row ms-1">
        <a type="button" class="btn btn-success d-block mb-4 col-lg-3 d-flex align-items-center" style="text-decoration:none;" href="tambah_kelas.php">
        <i class="fa-solid fa-plus mx-2"></i>
        <span>Tambah Kelas Baru</span>  
        </a>      
        </div> 



        <!-- new learning -->
        <?php foreach ($kelas as $k): ?>
        
          <div class="col-lg-4 mb-5">
                    <div class="card" style="">
                        <img src="upload/<?php echo $k['gambar']; ?>" alt="Kelas <?= $k['judul']; ?>" class="card-img-top " style="max-height: 170px; max-width: 100%; object-fit: cover; object-position: center;" />
                        <div class="card-body" style="min-height: 50px">
                          <span class="bintang">
                          <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                          <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                          <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                          <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                          <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                          </span>
                            <div class="d-flex justify-content-between">

                              <h5 class="card-title"><?= $k['judul']; ?></h5>
                              <span class="fs-7 text-secondary fw-light">RC-<?php echo $k['id'];?> </span>
                            </div>
                            <div class="d-flex flex-row justify-content-start">
                                <div class="d-flex align-items-center text-secondary">
                                    <i class="fa-solid fa-book"></i>
                                    <span class="mx-2"><?= $k['jumlah_materi']; ?></span>
                                </div>
                                <div class="d-flex align-items-center text-secondary">
                                    <i class="fa-solid fa-user"></i>
                                    <span class="mx-2"><?= $k['nama_pemateri']; ?></span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <span href="#" class="fw-bold text-secondary fs-4">Rp.<?= $k['harga']; ?></span>
                            <div class="d-flex">
                                <a href="edit.php?edit=<?php echo $k['id']; ?>" type="button" class="btn text-white btn-warning btn-sm fs-6 me-2">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                  </a>
                                    <a href="delete.php?id=<?php echo $k['id'] ; ?>" class="btn text-white btn-danger btn-sm fs-6" >
                                    <i class="fa-solid fa-trash"></i>
                                  </a>
                            </div>

                        </div>
                    </div>
          </div>



        <?php endforeach; ?>
      </div>
    </section>

   
    <!-- footer -->
    <footer class="bg-dark">
      <div class="col-lg-12 p-5">
        <div style="text-align: center">
          <a href="#" class="text-warning p-2"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/zallengrad/" class="text-warning p-2"><i class="fab fa-instagram"></i></a>
        </div>
        <p class="text-center text-secondary">Copyright Rosok Coding.co By Muhammad Afrizale 2024 </p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-qn8XuUnDQVeq0phcYZmgj3EhryHgA5Dv5j9tpHxlL8+I76XcejIkUp3Dy4yI3u5C" crossorigin="anonymous"></script>
  </body>
</html>
