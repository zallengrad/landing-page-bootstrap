<?php
include "../config.php";

$wrong_pw = ''; 

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users where username='$username' and password='$password'";

    $result = $db->query($sql);

    if($result->num_rows > 0) {
      $data = $result->fetch_assoc(); 

      header("location: ../dashboard/dash_adm.php");

    } else {
      $wrong_pw = "Kata Sandi / Username salah";
    }
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
    <link rel="stylesheet" href="still.css">
    <title>Login Page</title>
  </head>

  <body>
    <div class="row vh-100 g-0" >
      <!-- left side -->
      <div class="col-lg-6 position-relative d-none d-lg-block">
          <div class="bg-holder" style="background-image: url(images/background.png); background-size: cover; background-position: center;"></div>

       </div>
      <!-- right side -->
      <div class="col-lg-6">
        <div class="row align-items-center justify-content-center h-100 g-0 px-4 px-sm-0">
          <div class="col col-sm-12 col-lg-7 col-xl-6">
            <!-- logo -->
             <a href="../index.php" class="d-flex justify-content-center mb-4">
                <img src="images/logorc.png" width="300" alt="">
             </a>

             <div class="text-center mb-3">
                <h3 class="fw-bold">Login Admin</h3>
                <p>Silahkan masukkan informasi akun kamu.</p>
             </div>

              <!-- Divider -->
              <div class="position-relative ">
                <hr class="text-secondary">
              </div>

              <div class="alert alert-danger text-center" role="alert" style="display: <?= !empty($wrong_pw) ? 'block' : 'none'; ?>;">
                <?= $wrong_pw; ?>
              </div>

              <!-- Form -->
               <form action="login-adm.php" method="POST">
                <div class="input-group mb-3">
                  <span class="input-group-text" style="height: 45px;">
                    <i class="fa-solid fa-user" style="color: #336666;" ></i>
                  </span>
                  <input type="text" class="form-control form-control-lg fs-6" placeholder="Username / Email" name="username">
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text" style="height: 45px;">
                    <i class="fa-solid fa-lock" style="color: #336666;"></i>
                  </span>
                  <input type="password" class="form-control form-control-lg fs-6" placeholder="Password" name="password">
                </div>

                <button class="btn btn-primary btn-lg w-100 mb-3" name="login">Login</button>
               </form>

               <!-- Sign Up -->
                <div class="text-center">
                  <small>Belum Punya Akun Masuk? <a href="../signup/signup.php" class="fw-bold"> Sign Up</a></small>
                </div>


          </div>
        </div>
      </div>

    </div>

   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-qn8XuUnDQVeq0phcYZmgj3EhryHgA5Dv5j9tpHxlL8+I76XcejIkUp3Dy4yI3u5C" crossorigin="anonymous"></script>
  </body>
</html>