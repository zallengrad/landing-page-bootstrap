<?php

include "config.php";

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
        <a href="index.php" class="navbar-brand"><img src="images/logorc.png" alt="" height="30" /></a>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle Navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
              <a href="#" class="nav-link text-white">Home</a>
            </li>
            <li class="nav-item">
              <a href="#service" class="nav-link text-white">Service</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link text-white">About</a>
            </li>

            <li class="nav-item">
            <a href="login/pralogin.php" class="btn button-primer btn-md mb-2 mx-2" role="button">Login</a>
            </li>
            <li class="nav-item">
            <a href="signup/prasignup.php" class="btn button-primer btn-md signUp" role="button">Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- header jumbotrpn -->
    <section class="jumbotron jumbotron-fluid background-header">
      <div class="container-fluid text-center">
        <h1 class="display-3" style="color: aliceblue">Belajar Coding Lebih Mudah Bersama Kami</h1>
        <p class="lead text-center" style="font-weight: semi-bold; color: #fff">
          Kami menyediakan banyak modul yang kamu butuhkan untuk belajar pemrograman, dari tingkat dasar hingga mahir.
          segera bergabung bersama kami dan nikmati petualanganmu </p>
        <a href="signup/prasignup.php" class="btn button-primer btn-lg signUp" role="button">Gabung Sekarang</a>
        <!-- <a href="#" class="btn btn-secondary btn-lg" role="button">Pelajari dulu</a> -->
      </div>
    </section>

    <!-- service -->
    <section id="service" class="service-style container-fluid container-fluid-max">
      <div class="row text-center">
        <div class="col-12 pb-4">
          <h2 class="display-4" style="margin-top: 5rem !important">Mengapa memilih kami?</h2>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <span class="fa-stack fa-2x">
            <i class="fas fa-circle fa-stack-2x text-success"></i>
            <i class="fas fa-list-ol fa-stack-1x text-white"></i>
          </span>
          <h3 class="text-success">Up To Date</h3>
          <p>Pembelajaran Update Dari Waktu ke Waktu</p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <span class="fa-stack fa-2x">
            <i class="fas fa-circle fa-stack-2x text-success"></i>
            <i class="fas fa-laptop-code fa-stack-1x text-white"></i>
          </span>
          <h3 class="text-success">Modul Lengkap</h3>
          <p>Paket Pembelajaran Yang Komperhensif</p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <span class="fa-stack fa-2x">
            <i class="fas fa-circle fa-stack-2x text-success"></i>
            <i class="fas fa-money-bill fa-stack-1x text-white"></i>
          </span>
          <h3 class="text-success">Tutor Expert</h3>
          <p>Di Bimbing oleh Praktisi IT yang ahli di bidang nya</p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <span class="fa-stack fa-2x">
            <i class="fas fa-circle fa-stack-2x text-success"></i>
            <i class="fas fa-chart-line fa-stack-1x text-white"></i>
          </span>
          <h3 class="text-success">No Limit</h3>
          <p>Akses materi kapanpun dimanapun</p>
        </div>
      </div>

    </section>

    <!-- about -->
    <section id="about">
      <div class="container-fluid-max">
        <h2 class="display-4 text-center mb-5" style="margin-top: 5rem !important">Tentang Kami</h2>
        <!-- grid -->
        <div class="row g-0">
          <div class="col-12 col-md-6">
            <div class="px-5">
              <h3 class="display-5 text-center text-success mt-3 mb-3">Belajar Coding Lebih Seru </h3>
              <p style="text-align: justify" class="about-description">
              Di Rosok Coding, kami percaya bahwa pembelajaran coding tidak hanya penting tetapi juga bisa menjadi pengalaman yang menyenangkan dan bermakna. Kami memahami bahwa dunia teknologi berkembang pesat, sehingga penting untuk memberikan pembelajaran yang relevan dan up-to-date. Oleh karena itu, kami menyediakan modul pembelajaran yang dirancang khusus untuk memenuhi kebutuhan pemula hingga tingkat ahli. Modul-modul ini mencakup berbagai topik mulai dari dasar-dasar pemrograman hingga teknologi terkini seperti kecerdasan buatan, pengembangan aplikasi, dan pengelolaan data. Dengan pendekatan yang terstruktur, Anda dapat membangun fondasi yang kuat dan melanjutkan perjalanan Anda dengan percaya diri menuju keahlian di bidang pemrograman.

              Rosok Coding didukung oleh tim tutor berpengalaman yang berdedikasi untuk membantu Anda mengatasi setiap tantangan dalam dunia coding. Tutor-tutor kami tidak hanya ahli di bidang mereka tetapi juga memiliki keterampilan mengajar yang mumpuni, sehingga setiap sesi pembelajaran menjadi efektif dan mudah dipahami. Kami percaya bahwa setiap orang memiliki potensi untuk menjadi programmer hebat, asalkan diberikan dukungan yang tepat. Dengan pembelajaran yang bersifat interaktif dan personal, Anda akan merasa didampingi sepanjang perjalanan, mulai dari memahami logika dasar pemrograman hingga menyelesaikan proyek-proyek nyata yang relevan dengan industri.

              Selain pembelajaran, kami juga memiliki komunitas yang solid dan mendukung untuk membantu Anda berkembang lebih jauh. Di komunitas Rosok Coding, Anda dapat bertukar ide, berbagi pengalaman, dan belajar bersama individu-individu yang memiliki semangat yang sama. Kami percaya bahwa belajar coding bukan hanya tentang memahami sintaks atau logika, tetapi juga tentang membangun jaringan, menemukan inspirasi, dan mengeksplorasi cara baru untuk memahami dunia teknologi. Bergabunglah bersama kami untuk menjadi bagian dari perubahan teknologi global dan mulailah perjalanan Anda menjadi seorang ahli coding hari ini.
              </p>
              </p>
             
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="vh-100 cover" style="background-image: url('images/banner2.jpg')"></div>
          </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- contact -->
    <section id="contact" class="container-fluid text-center pb-4" style="background-color: #dadada">
      <h2 class="display-4 pb-4 pt-5" style="">Bergabung Bersama Kami Sekarang!</h2>
      <p class="lead pb-3">Daftarkan Dirimu Untuk Menikmati Pembelajaran Menarik</p>
      <a href="signup/prasignup.php" class="btn button-primer btn-lg signUp" role="button">Gabung Sekarang</a>
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
