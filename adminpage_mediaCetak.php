



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
  
  <!-- DATA TABLES CSS -->
  <link rel="stylesheet" href="assets/dataTables/datatables/dataTables.bootstrap4.css">

</head>


<body>
            <!-- Sidenav -->
            <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
              <div class="scrollbar-inner">
                <!-- Brand -->
                <div class="sidenav-header  align-items-center">
                  <a class="navbar-brand" href="javascript:void(0)">
                    <img src="assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
                  </a>
                </div>
                <div class="navbar-inner">
                  <!-- Collapse -->
                  <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="dashboard.html">
                          <i class="ni ni-tv-2 text-primary"></i>
                          <span class="nav-link-text">Dashboard</span>
                        </a>
                      </li>
                       <li class="nav-item">
                        <a class="nav-link" href="new_order.php">
                          <i class="fa fa-desktop text-primary"></i>
                          <span class="nav-link-text">POS</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="adminpage_mediaCetak.php">
                          <i class="ni ni-archive-2 text-orange"></i>
                          <span class="nav-link-text">Data Media Cetak</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="adminpage_dataPegawai.php">
                          <i class="ni ni-single-02 text-primary"></i>
                          <span class="nav-link-text">Data Pegawai</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="adminpage_dataPelanggan.php">
                          <i class="ni ni-circle-08 text-pink"></i>
                          <span class="nav-link-text">Data Pelanggan</span>
                        </a>
                      <li class="nav-item">
                       <a class="nav-link " href="adminpage_laporan.php">
                          <i class="ni ni-bullet-list-67 text-default"></i>
                          <span class="nav-link-text">Laporan</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="login.html">
                          <i class="ni ni-key-25 text-info"></i>
                          <span class="nav-link-text">Login</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="register.html">
                          <i class="ni ni-circle-08 text-pink"></i>
                          <span class="nav-link-text">Register</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="upgrade.html">
                          <i class="ni ni-send text-dark"></i>
                          <span class="nav-link-text">Upgrade</span>
                        </a>
                      </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Heading -->
                  </div>
                </div>
              </div>
            </nav>
  
     <!-- Main content -->
  <div class="main-content" id="panel">
              
          <?php include "header_dashboard.php" ?>
          <?php include "form_mediaCetak.php" ?>

  </div>
  

  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <script src ="assets/js/sweetalert2.all.min.js"></script>
  <script src ="assets/js/jquery-3.5.1.min.js"></script>


  <script src="assets/dataTables/datatables/jquery.dataTables.min.js"></script>
  <script src="assets/dataTables/datatables/dataTables.bootstrap4.min.js"></script>


      
  <script src="assets/dataTables/be_tables_datatables.min.js"></script>


  <script type="text/javascript">
  $(document).ready( function () {
    $('#datamedia').DataTable();
  } );
  </script>
</body>

</html>