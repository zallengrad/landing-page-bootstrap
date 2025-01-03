<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />

    <title>Ravens</title>
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
        <a href="index.html" class="navbar-brand"><img src="images/logorc.png" alt="" height="30" /></a>
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
              <a href="#product" class="nav-link text-white">Product</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link text-white">About</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link text-white">Contact</a>
            </li>
            <li class="nav-item">
            <a href="#" class="btn button-primer btn-lg mx-2" role="button">Login</a>
            </li>
            <li class="nav-item">
            <a href="#" class="btn button-primer btn-lg" role="button">Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- header jumbotrpn -->
    <section class="jumbotron jumbotron-fluid background-header">
      <div class="container-fluid text-center">
        <h1 class="display-3" style="color: aliceblue">Belajar Coding Lebih Mudah Bersama Kami</h1>
        <p class="lead" style="font-weight: semi-bold; color: #fff">Kami menyediakan banyak modul yang kamu butuhkan untuk belajar pemrograman, dari tingkat dasar hingga mahir\n dada .</p>
        <a href="#" class="btn button-primer btn-lg" role="button">Gabung Sekarang</a>
        <!-- <a href="#" class="btn btn-secondary btn-lg" role="button">Pelajari dulu</a> -->
      </div>
    </section>

    

    <!-- product -->
    <section id="product" class="container mt-5">
      <div class="row">
        <div class="col-12 pb-4 text-center">
          <h2 class="display-4 mb-5" style="margin-top: 5rem !important">Our Most Popular Course</h2>
        </div>
        <!-- card -->
        <div class="col-sm-3 mb-4">
          <div class="card">
            <img src="images/card1.png" alt="Produk1" class="card-img-top" style="max-height: 400px" />
            <div class="card-body" style="min-height: 50px">
              <span class="bintang">
              <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
              <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
              <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
              <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
              <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
              </span>
              <h4 class="card-title">Making Temperature</h4>
              <!-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, maxime. Totam id, tenetur iure repudiandae quisquam autem quaerat tempore quis?</p>
            </div> -->
            <div class="card-footer">
              <!-- <a href="#" class="btn button-sekunder">Detail & Harga</a> -->
            </div>
          </div>
        </div>
 

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
          <h3 class="text-success">Fasilitas Oke</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <span class="fa-stack fa-2x">
            <i class="fas fa-circle fa-stack-2x text-success"></i>
            <i class="fas fa-laptop-code fa-stack-1x text-white"></i>
          </span>
          <h3 class="text-success">Modul Lengkap</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <span class="fa-stack fa-2x">
            <i class="fas fa-circle fa-stack-2x text-success"></i>
            <i class="fas fa-money-bill fa-stack-1x text-white"></i>
          </span>
          <h3 class="text-success">Biaya Terjangkau</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <span class="fa-stack fa-2x">
            <i class="fas fa-circle fa-stack-2x text-success"></i>
            <i class="fas fa-chart-line fa-stack-1x text-white"></i>
          </span>
          <h3 class="text-success">Terarah</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>
      <!-- btn service -->
      <div class="row mt-5">
        <div class="col text-center">
          <a href="#" class="btn button-sekunder">Service</a>
        </div>
      </div>
    </section>

    <!-- about -->
    <section id="about">
      <div class="container-fluid-max">
        <h2 class="display-4 text-center mb-5" style="margin-top: 15rem !important">Tentang Kami</h2>
        <!-- grid -->
        <div class="row g-0">
          <div class="col-12 col-md-6">
            <div class="px-5">
              <h3 class="display-5 text-center text-success mt-3 mb-3">Laki-Laki Tidak bercerita</h3>
              <p style="text-align: justify" class="about-description">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo at non molestias inventore quis, quidem itaque aliquid dolorum, saepe dicta esse tempora deserunt soluta totam ratione sed illum, quod sapiente. Lorem ipsum
                dolor sit amet consectetur adipisicing elit. Hic dicta soluta dolores adipisci id magnam fugit rerum, recusandae sint nobis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, voluptate ad? Amet eligendi
                dicta deleniti soluta porro quis at dignissimos! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque doloribus, excepturi illum eligendi ad ducimus ab? Qui expedita exercitationem, inventore et repellat minus ad
                enim sint nostrum mollitia architecto, commodi accusamus cum ea id maxime sequi quas repellendus. Sint sed vitae earum nam quod natus quia distinctio commodi quasi laboriosam ratione perferendis, totam optio suscipit
                asperiores magni voluptatum quisquam veniam laudantium hic accusantium! Eaque, eligendi vel! Harum maiores iusto soluta sit pariatur odio perferendis rerum qui suscipit vero repellendus amet, alias quaerat commodi voluptates
                aspernatur optio? At aperiam recusandae reiciendis tenetur, tempora atque. Molestiae quam quo sit cupiditate harum praesentium dolorem a aspernatur dolorum fuga aut quasi sed, vero impedit. Sint delectus harum, ipsum
                explicabo at temporibus ducimus molestiae saepe ullam odio maxime quisquam accusantium unde. Nemo asperiores nobis veniam voluptates saepe commodi officiis quae, maxime ipsum ipsam. Quidem ex vel fugit reiciendis, animi
                accusantium et earum porro
              </p>
              <div class="col-12 pt-3 text-center p-3">
                <a href="#" class="btn btn-danger btn-lg text-white">Lihat Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="vh-100 cover" style="background-image: url('images/banner2.jpg')"></div>
          </div>

          <div class="col-12 col-md-6">
            <div class="vh-100 cover" style="background-image: url('images/banner3.png')"></div>
          </div>
          <div class="col-12 col-md-6 text-center">
            <div class="px-5">
              <h3 class="display-5 text-center text-success mt-3 mb-3">Aku Yang Berbeda</h3>
              <p style="text-align: justify" class="about-description">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo at non molestias inventore quis, quidem itaque aliquid dolorum, saepe dicta esse tempora deserunt soluta totam ratione sed illum, quod sapiente. Lorem ipsum
                dolor sit amet consectetur adipisicing elit. Hic dicta soluta dolores adipisci id magnam fugit rerum, recusandae sint nobis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, voluptate ad? Amet eligendi
                dicta deleniti soluta porro quis at dignissimos! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque doloribus, excepturi illum eligendi ad ducimus ab? Qui expedita exercitationem, inventore et repellat minus ad
                enim sint nostrum mollitia architecto, commodi accusamus cum ea id maxime sequi quas repellendus. Sint sed vitae earum nam quod natus quia distinctio commodi quasi laboriosam ratione perferendis, totam optio suscipit
                asperiores magni voluptatum quisquam veniam laudantium hic accusantium! Eaque, eligendi vel! Harum maiores iusto soluta sit pariatur odio perferendis rerum qui suscipit vero repellendus amet, alias quaerat commodi voluptates
                aspernatur optio? At aperiam recusandae reiciendis tenetur, tempora atque. Molestiae quam quo sit cupiditate harum praesentium dolorem a aspernatur dolorum fuga aut quasi sed, vero impedit. Sint delectus harum, ipsum
                explicabo at temporibus ducimus molestiae saepe ullam odio maxime quisquam accusantium unde. Nemo asperiores nobis veniam voluptates saepe commodi officiis quae, maxime ipsum ipsam. Quidem ex vel fugit reiciendis, animi
                accusantium et earum porro
              </p>
              <div class="col-12 pt-3 text-center">
                <a href="#" class="btn btn-danger btn-lg text-white p-3">Lihat Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- contact -->
    <section id="contact" class="container-fluid text-center pb-4" style="background-color: #dadada">
      <h2 class="display-4 pb-4 pt-5" style="margin-top: 5rem !important">Hubungi Kami Sekarang!</h2>
      <p class="lead pb-3">Kirim pesan untuk bergabung bersama kami.</p>
      <a href="#" class="btn button-primer btn-lg mb-4">Whatsapp Kami</a>
    </section>

    <!-- footer -->
    <footer class="bg-dark">
      <div class="col-lg-12 p-5">
        <div style="text-align: center">
          <a href="#" class="text-warning p-2"><i class="fab fa-facebook"></i></a>
          <a href="#" class="text-warning p-2"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-warning p-2"><i class="fab fa-instagram"></i></a>
        </div>
        <p class="text-center text-secondary">Copyright & copy ravenz.co 2020</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-qn8XuUnDQVeq0phcYZmgj3EhryHgA5Dv5j9tpHxlL8+I76XcejIkUp3Dy4yI3u5C" crossorigin="anonymous"></script>
  </body>
</html>
