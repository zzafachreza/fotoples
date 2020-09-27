<?php

session_start();

if (!isset($_SESSION["login"])) 
{
  echo "<meta http-equiv='refresh' content='0 url=login.php'>";
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
            <a href="index.php" class="nav-link">
              <span class="nav-link-inner--text font-weight-bold">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="new_order.php" class="nav-link">
              <span class="nav-link-inner--text">Create New Order</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="register.html" class="nav-link">
              <span class="nav-link-inner--text">Status Order</span>
            </a>
          </li>
        </ul>
        <hr class="d-lg-none" />
        <?php include "nav_header.php" ?>
      </div>
    </div>
  </nav>
  <!-- Main content -->


  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
          <div class="container">
              <div class="container-fluid d-flex align-items-center">
                <div class="row">
                  <div class="col-lg-7 col-md-10">
                    <h1 class="text-white">Hallo <?=$_SESSION['fullnama']?></h1>
                    <p class="text-white mt-0 mb-5">Make the daytime the pinnacle of your morale. At night as the climax of your prayers, don't forget to be grateful :)</p>
                  </div>
                </div>
              </div>
          </div>


          <div class="separator separator-bottom separator-skew zindex-400">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
              <polygon class="fill-default" points="3560 0 3560 100 0 100"></polygon>
            </svg>
          </div>
    </div> <!-- Akhir Header -->

       <!-- Page content -->
        <div class="container-fluid mt--6">
          <div class="row">
            <div class="col-xl-4 order-xl-2">
              <div class="card card-profile">
                <img src="assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                  <div class="col-lg-3 order-lg-2">
                    <div class="card-profile-image">
                      <a href="#">
                        <img src="assets/img/theme/team-4.jpg" class="rounded-circle">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                  <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-sm btn-info  mr-4 ">Connect</a>
                    <a href="#" class="btn btn-sm btn-default float-right">Message</a>
                  </div>
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col">
                      <div class="card-profile-stats d-flex justify-content-center">
                        <div>
                          <span class="heading">22</span>
                          <span class="description">Friends</span>
                        </div>
                        <div>
                          <span class="heading">10</span>
                          <span class="description">Photos</span>
                        </div>
                        <div>
                          <span class="heading">89</span>
                          <span class="description">Comments</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <h5 class="h3">
                      Jessica Jones<span class="font-weight-light">, 27</span>
                    </h5>
                    <div class="h5 font-weight-300">
                      <i class="ni location_pin mr-2"></i>Bucharest, Romania
                    </div>
                    <div class="h5 mt-4">
                      <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                    </div>
                    <div>
                      <i class="ni education_hat mr-2"></i>University of Computer Science
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-8 order-xl-1">
              <div class="card">
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h3 class="mb-0">Status Transaction </h3>
                    </div>
                    <div class="col-4 text-right">
                      <table>
                        
                      </table>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                   <?php
//KONEKSI
include 'action/koneksi.php';

// print_r($_GET);


$sql = mysqli_query ($conn, "SELECT *
FROM
    `transaksi_bayar`
    INNER JOIN `transaksi` 
        ON (`transaksi_bayar`.`inv` = `transaksi`.`inv`)
    INNER JOIN `media_cetak` 
        ON (`transaksi`.`id_media` = `media_cetak`.`id_media`)
    INNER JOIN `pelanggan` 
        ON (`transaksi`.`id_pelanggan` = `pelanggan`.`id_pelanggan`)
    INNER JOIN `kategori_cetak` 
        ON (`media_cetak`.`id_kategori` = `kategori_cetak`.`id_kategori`) WHERE status_bayar='BELUM LUNAS' GROUP BY transaksi_bayar.inv; ");

?>
                  

                  <div id="table" class="table-responsive" style="height: 300px;">
<table id="datamedia_transaksi" class="table align-items-center table-flush">
      <thead class="thead-light">
    <tr>
      <th scope="col" class="sort">No</th>
      <th scope="col" class="sort">KODE TRANSAKSI</th>
     <th scope="col" class="sort">NAMA PELANGGAN</th>
<!--       <th scope="col" class="sort">TELEPON PELANGGAN</th>
      <th scope="col" class="sort">EMAIL PELANGGAN</th> -->
      <th scope="col" class="sort">TOTAL</th>
      <th scope="col" class="sort">BAYAR</th>
      <th scope="col" class="sort">SISA</th>
      <th scope="col" class="sort">STATUS</th>
      <th scope="col" class="sort">AKSI</th>
    </tr>
  </thead>
  <tbody class="list">
    <?php

    $no=1;

      while ($tampil = mysqli_fetch_array ($sql)) {
      
    ?>  
    <tr>
      <td><?php echo $no  ?></td>
      <td><?php echo $tampil['inv'] ?></td> 
     <td><?php echo $tampil['nama_pelanggan'] ?></td>
<!--       <td><?php echo $tampil['telpon_pelanggan'] ?></td>
      <td><?php echo $tampil['email_pelanggan'] ?></td>  -->
      <td><?php echo number_format($tampil['total']) ?></td>
      <td><?php echo number_format($tampil['bayar']) ?></td>
      <td><?php echo number_format($tampil['kembalian']) ?></td>
      <td><?php echo $tampil['status_bayar'] ?></td>
      <td> <button data-pelanggan="<?php echo $tampil['id_pelanggan'] ?>" data-id="<?php echo $tampil['inv'] ?>" class="edit btn btn-primary" data-toggle="tooltip" data-placement="top" title="edit" ><i class="fa fa-pencil-alt"></i></button></td>
    </tr>


  <?php $no++;} ?>
  </tbody>
</table>

</div>
                
                </div>
              </div>
            </div>
          </div> <!-- Akhir Page content -->

  </div> <!-- Akhir Main Content -->


  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2020 <a href="" class="font-weight-bold ml-1" target="_blank">Rizki Ubaidillah</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>

  <script src="assets/js/argon.js?v=1.2.0"></script>
</body>

</html>

<script type="text/javascript">
  $(".edit").click(function(e){
    e.preventDefault();
    var inv = $(this).attr("data-id");
    alert(inv);
  })
</script>