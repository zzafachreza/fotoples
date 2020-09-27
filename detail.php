
<?php
  include 'action/koneksi.php';
  session_start();
  // print_r($_SESSION);
  $inv = $_GET['inv'];

  $sqlHD = mysqli_query ($conn, "SELECT *
FROM
    `transaksi_bayar`
    INNER JOIN `transaksi` 
        ON (`transaksi_bayar`.`inv` = `transaksi`.`inv`)
    INNER JOIN `media_cetak` 
        ON (`transaksi`.`id_media` = `media_cetak`.`id_media`)
    INNER JOIN `pelanggan` 
        ON (`transaksi`.`id_pelanggan` = `pelanggan`.`id_pelanggan`)
    INNER JOIN `kategori_cetak` 
        ON (`media_cetak`.`id_kategori` = `kategori_cetak`.`id_kategori`) WHERE transaksi_bayar.inv='$inv' GROUP BY transaksi_bayar.inv; ");
$tampilHD = mysqli_fetch_array ($sqlHD);


  $sqlDT = mysqli_query ($conn, "SELECT *
FROM
    `transaksi_bayar`
    INNER JOIN `transaksi` 
        ON (`transaksi_bayar`.`inv` = `transaksi`.`inv`)
    INNER JOIN `media_cetak` 
        ON (`transaksi`.`id_media` = `media_cetak`.`id_media`)
    INNER JOIN `pelanggan` 
        ON (`transaksi`.`id_pelanggan` = `pelanggan`.`id_pelanggan`)
    INNER JOIN `kategori_cetak` 
        ON (`media_cetak`.`id_kategori` = `kategori_cetak`.`id_kategori`) WHERE transaksi.inv='$inv'");


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
  
  <!-- DATA TABLES CSS -->
    <script src="assets/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"></script>
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
                        <a class="nav-link " href="adminpage_mediaCetak.php">
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
                        <a class="nav-link active" href="adminpage_laporan.php">
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


<!-- Bagian content -->
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
          <div class="card" >
                    <!-- Card header -->
                    <div class="card-header">
                      <div class="row align-items-center">
                        <div class="col-4">
                          <a  href="adminpage_laporan.php" class="btn btn-sm btn-primary"> <i class="fa fa-arrow-left"> </i> Kembali</a>
                          <h2 class="mb-0">Laporan Media Cetak - Detail</h2>
                        </div>
                        <div class="col-8 text-right">
                         
                          
                         <h1><?php echo $tampilHD['inv'] ?></h1>
                         
                        </div>
                      </div>
                    </div>

                          
                  

<div id="table" class="table-responsive" style="height: 600px;padding: 1%">
  <table class="table">
    <tr>
      <td>NAMA PELANGGAN</td>
      <td><?php echo $tampilHD['nama_pelanggan'] ?></td>
      <td>TANGGAL TRANSAKSI</td>
      <td><?php echo $tampilHD['tanggal'] ?></td>
    </tr>
    <tr>
      <td>TELEPON PELANGGAN</td>
      <td><?php echo $tampilHD['telpon_pelanggan'] ?></td>
      <td>STATUS TRANSAKSI</td>
      <td><?php echo $tampilHD['status_transaksi'] ?></td>
    </tr>
     <tr>
      <td>EMAIL PELANGGAN</td>
      <td><?php echo $tampilHD['email_pelanggan'] ?></td>
      <td>STATUS BAYAR</td>
      <td><h1><?php echo $tampilHD['status_bayar'] ?></h1></td>
    </tr>
  </table>
  <hr/>

  <table class="table table-bordered table-striped">
    <tr>
      <th scope="col" class="sort">No</th>
      <!-- <th scope="col" class="sort">KODE TRANSAKSI</th> -->
    <!--  <th>NAMA PELANGGAN</th>
      <th>TELEPON PELANGGAN</th>
      <th>EMAIL PELANGGAN</th> -->
      <th scope="col" class="sort">KATEGORi</th>
      <th scope="col" class="sort">MEDIA</th>
      <th scope="col" class="sort">HARGA</th>
      <th scope="col" class="sort">QTY</th>
      <th scope="col" class="sort">SUBTOTAL</th>
      <th scope="col" class="sort">KETERANGAN</th>

    </tr>
    <?php

    $no=1;
    $total =0;

      while ($tampil = mysqli_fetch_array ($sqlDT)) {
        # code...

        $total += $tampil['subtotal'];
      
    ?>  
    <tr>
      <td><?php echo $no  ?></td>
      <!-- <td><?php echo $tampil['id_transaksi'] ?></td>  -->
<!--      <td><?php echo $tampil['nama_pelanggan'] ?></td>
      <td><?php echo $tampil['telpon_pelanggan'] ?></td>
      <td><?php echo $tampil['email_pelanggan'] ?></td> -->
      <td><?php echo $tampil['nama_kategori'] ?></td>
      <td><?php echo $tampil['nama_media'] ?></td>
      <td><?php echo number_format($tampil['harga']) ?></td>
      <td><?php echo number_format($tampil['qty']) ?></td>
      <td><?php echo number_format($tampil['subtotal']) ?></td>
      <td><?php echo $tampil['keterangan'] ?></td>
         </tr>


  <?php $no++;} ?>
  </table>
   <div class="row align-items-center">

                        <div class="col-4">
                          
                        </div>
                        <div class="col-8 text-right">
                         
                          
                         <p style="font-size: 25px;font-weight: bold;"><?php echo "Rp. ".number_format($tampilHD['total'] )." (TOTAL) " ?></p>
                       
                        <p style="font-size: 25px;font-weight: bold;"><?php echo "Rp. ".number_format($tampilHD['bayar'] )." (BAYAR) " ?></p>
                       
                        <p style="font-size: 25px;font-weight: bold;"><?php echo "Rp. ".number_format($tampilHD['kembalian'])." (SISA)" ?></p>
                         
                        </div>

</div>
                  
                         
           </div>
        <!-- Akhir Bagian content -->
                  

          </div> <!-- Akhir card -->
    </div> <!-- Akhir col -->
  </div> <!-- Akhir row -->
  <!-- Footer -->
          <footer class="footer pt-0">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6">
                <div class="copyright text-center  text-lg-left  text-muted">
                  &copy; 2020 <a href="#" class="font-weight-bold ml-1" target="_blank">Rizki Ubaidillah</a>
                </div>
              </div>
            </div>
          </footer>
</div> <!

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
    <script src="assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>


  <script src="assets/dataTables/datatables/jquery.dataTables.min.js"></script>
  <script src="assets/dataTables/datatables/dataTables.bootstrap4.min.js"></script>


      
  <script src="assets/dataTables/be_tables_datatables.min.js"></script>


  <script type="text/javascript">
  $(document).ready( function () {
    $('#datamedia_transaksi').DataTable({

    });
      $('.tgl').datepicker({
    format:'yyyy-mm-dd',
    autoclose:true,
    todayHighlight:true
  });
  } );
  </script>
</body>

</html>