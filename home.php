<?php

session_start();



if (!isset($_SESSION["login"])) 
{
  echo "<meta http-equiv='refresh' content='0 url=login.php'>";
  exit;
}
error_reporting(0);
//KONEKSI

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
  <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>


  <script src="assets/js/argon.js?v=1.2.0"></script>
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
            <a href="home.php" class="nav-link">
              <span class="nav-link-inner--text font-weight-bold">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="new_order.php" class="nav-link">
              <span class="nav-link-inner--text">Create New Order</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php" class="nav-link">
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
         
          <div class="separator separator-bottom separator-skew zindex-400">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
              <polygon class="fill-default" points="3560 0 3560 100 0 100"></polygon>
            </svg>
          </div>
    </div> <!-- Akhir Header -->

     
            <div class="col-xl-12 order-xl-1">
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

                

  <div class="nav-wrapper">
    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
        <li class="nav-item">
            <a class="nav-link mb-sm-3 mb-md-0 <?php echo $_GET['open']=='baru'?'active':'' ?>"  href="?open=baru" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>NOTA BARU DIBUAT </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link mb-sm-3 mb-md-0 <?php echo $_GET['open']=='belum'?'active':'' ?>"" href="?open=belum" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>SUDAH BAYAR BELUM LUNAS</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link mb-sm-3 mb-md-0 <?php echo $_GET['open']=='lunas'?'active':'' ?>"" href="?open=lunas" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>LUNAS</a>
        </li>
    </ul>
</div>
<div class="card shadow">

    <?php




                    switch ($_GET['open']) {
                      case 'baru':
                        # code...

                       include_once 'action/get_status_baru.php';
                   
                        break;
                        case 'belum':
                        # code...
                             include_once 'action/get_status_belum.php';
                        break;
                        case 'lunas':
                        # code...
                        
                            include_once 'action/get_status_lunas.php';
                        break;
                      
                      default:
                        # code...
                           include_once 'action/get_status_baru.php';
                        break;
                    }



                  ?>
    
</div>




   



                
                </div>
              </div>
            </div>
          </div> <!-- Akhir Page content -->

  </div> <!-- Akhir Main Content -->


  <!-- Footer -->
  
  <!-- Scripts -->
  <!-- Core -->

</body>

</html>

<script type="text/javascript">

  getStatusBaru();

   function getStatusBaru(){
    $.ajax({
      url:'action/get_status_baru.php',
      success:function(data){
        $("#getStatusBaru").html(data);
      }
    })

  }


  getStatusBelum();

   function getStatusBelum(){
    $.ajax({
      url:'action/get_status_belum.php',
      success:function(data){
        $("#getStatusBelum").html(data);
      }
    })

  }


  getStatusLunas();

   function getStatusLunas(){
    $.ajax({
      url:'action/get_status_lunas.php',
      success:function(data){
        $("#getStatusLunas").html(data);
      }
    })

  }



 

</script>