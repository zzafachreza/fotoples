<?php
session_start();
if (isset($_SESSION["login"])) 
{
  echo "<meta http-equiv='refresh' content='0 url=index.php'>";
  exit;
}
?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Fotoples Printing</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/main.css" type="text/css">
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>

  <script src ="assets/js/sweetalert2.all.min.js"></script>
  <script src ="assets/js/jquery-3.5.1.min.js"></script>



<body class="bg-default">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="dashboard.html">
        <img src="assets/img/brand/white.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="dashboard.html">
                <img src="assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
          
              <span class="nav-link-inner--text font-weight-bold text-white ">Fotoples Digital Printing Pamulang</span>
            
          </li>
        </ul>
        <hr class="d-lg-none" />
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank" data-toggle="tooltip" data-original-title="Like us on Facebook">
              <i class="fab fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none">Facebook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Instagram">
              <i class="fab fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Twitter">
              <i class="ni ni-pin-3"></i>
              <span class="nav-link-inner--text d-lg-none">Twitter</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial" target="_blank" data-toggle="tooltip" data-original-title="Star us on Github">
              <i class="fab fa-google"></i>
              <span class="nav-link-inner--text d-lg-none">Github</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <h1 class="text-white text-center">Welcome!</h1>
              <p class="text-lead text-center text-bold text-white">Hai.. Have a nice Day :)</p>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Silahkan Login Terlebih Dahulu :)</small>
              </div>
              <form method="post">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    <input class="form-control" placeholder="Username" type="text" name="username" required="" autocomplete="off">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password" required="">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="login" class="btn btn-primary my-4">Sign in</button>
                </div>
              </form>
            </div>
          </div>
            <div class="col-12" align="center">
              <br>
              <small class="text-light text-center ">Belum Memiliki Akun ? Silahkan hubungi admin.. </small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php


require 'action/functions.php';


if (isset($_POST ['login'])) 
{
  $username = $_POST ['username'];
  $password = $_POST ['password'];


  $query_tampil = "SELECT * FROM operator_desain WHERE username = '$username'";
  
  // $query_tampil = "SELECT * FROM kasir WHERE username = '$username'";
  $sql_tampil = mysqli_query($conn, $query_tampil);
  $jumlah_tampil = mysqli_num_rows($sql_tampil);
  
  if($jumlah_tampil > 0)

  //cek username

            {
              while($tampil = mysqli_fetch_array($sql_tampil))
                  {
                    
                    $username = $tampil['username'];
                    $getpassword = $tampil['password'];
                    $fullnama = $tampil['nama_opd'];
                  }
                
                if($password != $getpassword)
                {
                  echo "<script type='text/javascript'>
                    
                   Swal.fire({
                              position: 'top-center',
                              icon: 'error',
                              title: 'Login Gagal',
                              text: 'Password tidak Sesuai !! Silahkan Periksa Kembali :)',
                              showConfirmButton: true,
                              confirmButtonColor : '#d33',
                              timer: 2500
                             })

                  </script>";
                  echo "<meta http-equiv='refresh' content='2 url=login.php'>";
                }

                else
                {
                  
                  
                          
                  echo "<script type='text/javascript'>
                    
                   Swal.fire({
                              position: 'top-center',
                              icon: 'success',
                              title: 'Login Berhasil',
                              text: 'Selamat Datang $fullnama , Have a Greet Day :) ',
                              showConfirmButton: true,
                              timer: 2500
                             })

                  </script>";
                    $_SESSION["login"] = true;
                    $_SESSION['fullnama'] = $fullnama;
                  echo "<meta http-equiv='refresh' content='1 url=index.php'>";
                }

            }

          else
            {

            $query_tampil = "SELECT * FROM kasir WHERE username = '$username'";
            $sql_tampil = mysqli_query($conn, $query_tampil);
            $jumlah_tampil = mysqli_num_rows($sql_tampil);
            
            if($jumlah_tampil > 0)
            {
                while($tampil = mysqli_fetch_array($sql_tampil))
                  {
                    
                    $username = $tampil['username'];
                    $getpassword = $tampil['password'];
                    $fullnama = $tampil['nama_kasir'];
                  }
                
                if($password != $getpassword)
                {
                  echo "<script type='text/javascript'>
                    
                   Swal.fire({
                              position: 'top-center',
                              icon: 'error',
                              title: 'Login Gagal',
                              text: 'Password tidak Sesuai !! Silahkan Periksa Kembali :)',
                              showConfirmButton: true,
                              confirmButtonColor : '#d33',
                              timer: 2500
                             })

                  </script>";
                  echo "<meta http-equiv='refresh' content='2 url=login.php'>";
                }

                else
                {
                  
                  
                  echo "<script type='text/javascript'>
                    
                   Swal.fire({
                              position: 'top-center',
                              icon: 'success',
                              title: 'Login Berhasil',
                              text: 'Selamat Datang $fullnama , Have a Greet Day :) ',
                              showConfirmButton: true,
                              timer: 2500
                             })

                  </script>";
                    $_SESSION["login"] = true;
                    $_SESSION['fullnama'] = $fullnama;
                  echo "<meta http-equiv='refresh' content='1 url=index.php'>";
                }
            }

            else
            {

            $query_tampil = "SELECT * FROM admin WHERE username = '$username'";
            $sql_tampil = mysqli_query($conn, $query_tampil);
            $jumlah_tampil = mysqli_num_rows($sql_tampil);
            
            if($jumlah_tampil > 0)
            {
                while($tampil = mysqli_fetch_array($sql_tampil))
                  {
                    
                    $username = $tampil['username'];
                    $getpassword = $tampil['password'];
                    $fullnama = $tampil['nama_admin'];
                  }
                
                if($password != $getpassword)
                {


                  echo "<script type='text/javascript'>
                    
                   Swal.fire({
                              position: 'top-center',
                              icon: 'error',
                              title: 'Login Gagal',
                              text: 'Password tidak Sesuai !! Silahkan Periksa Kembali :)',
                              showConfirmButton: true,
                              confirmButtonColor : '#d33',
                              timer: 2500
                             })

                  </script>";
                  echo "<meta http-equiv='refresh' content='2 url=login.php'>";
                }

                else
                {
                  
                  echo "<script type='text/javascript'>
                    
                   Swal.fire({
                              position: 'top-center',
                              icon: 'success',
                              title: 'Login Berhasil',
                              text: 'Selamat Datang $fullnama , Have a Greet Day :) ',
                              showConfirmButton: true,
                              timer: 2500
                             })

                  </script>";
                    $_SESSION["login"] = true;
                    $_SESSION['fullnama'] = $fullnama;
                  echo "<meta http-equiv='refresh' content='1 url=index.php'>";
                }
            }



            else
              { 
                echo "<script type='text/javascript'>
                    
                   Swal.fire({
                              position: 'top-center',
                              icon: 'error',
                              title: 'Login Gagal',
                              text: 'Username tidak Terdaftar, Silahkan Periksa Kembali',
                              showConfirmButton: true,
                              confirmButtonColor : '#d33',
                              timer: 7000
                             })

                  </script>";

                echo "<meta http-equiv='refresh' content='2 url=login.php'>";
              }

            }
          }

}




?>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-12">
          <div class="copyright text-center text-white ">
            &copy; 2020 <a href="https://www.creative-tim.com" class="text-white font-weight-bold ml-1" target="_blank">Rizki Ubaidillah</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  
  <script src ="assets/js/sweetalert2.all.min.js"></script>
  <script src ="assets/js/jquery-3.5.1.min.js"></script>

  
</body>

</html>