



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


<!-- Bagian content -->
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
          <div class="card" >
                    <!-- Card header -->
                    <div class="card-header">
                      <div class="row align-items-center">
                        <div class="col-4">
                          <h2 class="mb-0">Laporan Media Cetak</h2>
                        </div>
                        <div class="col-8 text-left">
                         <form>
                            <table class="table">
                            <tr>
                              <td>
                                <label>From</label>
                                <input type="text" name="awal" class="tgl form-control" value="<?php echo isset($_GET['awal']) ? $_GET['awal']:date('Y-m-d') ?>">
                              </td>
                              <td>
                                <label>To</label>
                                <input type="text" name="akhir" class="tgl form-control" value="<?php echo isset($_GET['akhir']) ? $_GET['akhir']:date('Y-m-d') ?>">
                              </td>
                              <td>
                                 <button type="submit" class="btn btn-sm btn-primary" style="height: 45px;width: 100px;margin-top: 25px;"> <i class="fa fa-search"> </i> Seacrh</button>
                              </td>
                            </tr>
                          </table>
                         </form>
                         
                        </div>
                      </div>
                    </div>

                           <?php
                           error_reporting(0);
//KONEKSI
include 'action/koneksi.php';

// print_r($_GET);


if ($_GET['awal']) {
  # code...
  $awal = $_GET['awal'];
  $akhir = $_GET['akhir'];

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
        ON (`media_cetak`.`id_kategori` = `kategori_cetak`.`id_kategori`) WHERE tanggal BETWEEN '$awal' AND '$akhir' GROUP BY transaksi_bayar.inv; ");

}else{

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
        ON (`media_cetak`.`id_kategori` = `kategori_cetak`.`id_kategori`) GROUP BY transaksi_bayar.inv; ");

}



// $sql = mysqli_query ($conn, "SELECT *
// FROM
//     `transaksi_bayar`
//     INNER JOIN `transaksi` 
//         ON (`transaksi_bayar`.`inv` = `transaksi`.`inv`)
//     INNER JOIN `media_cetak` 
//         ON (`transaksi`.`id_media` = `media_cetak`.`id_media`)
//     INNER JOIN `pelanggan` 
//         ON (`transaksi`.`id_pelanggan` = `pelanggan`.`id_pelanggan`)
//     INNER JOIN `kategori_cetak` 
//         ON (`media_cetak`.`id_kategori` = `kategori_cetak`.`id_kategori`) WHERE status_bayar='BELUM LUNAS' GROUP BY transaksi_bayar.inv; ");


?>
                  

<div id="table" class="table-responsive" style="height: 600px;padding: 1%">
<table id="datamedia_transaksi" class="table align-items-center table-flush">
      <thead class="thead-light">
    <tr>
      <th scope="col" class="sort">No</th>
      <th scope="col" class="sort">KODE TRANSAKSI</th>
            <th scope="col" class="sort">STATUS TRANSAKSI</th>
       <th scope="col" class="sort">TANGGAL TRANSAKSI</th>
     <!-- <th scope="col" class="sort">NAMA PELANGGAN</th> -->
<!--       <th scope="col" class="sort">TELEPON PELANGGAN</th>
      <th scope="col" class="sort">EMAIL PELANGGAN</th> -->
      <th scope="col" class="sort">TOTAL</th>
      <th scope="col" class="sort">BAYAR</th>
      <th scope="col" class="sort">SISA</th>
      <th scope="col" class="sort">STATUS BAYAR</th>
      <th scope="col" class="sort">TANGGAL BAYAR</th>

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
            <td><?php echo $tampil['tanggal'] ?></td>
            <td><?php echo $tampil['status_transaksi'] ?></td>
     <!-- <td><?php echo $tampil['nama_pelanggan'] ?></td> -->

<!--       <td><?php echo $tampil['telpon_pelanggan'] ?></td>
      <td><?php echo $tampil['email_pelanggan'] ?></td>  -->
      <td><?php echo number_format($tampil['total']) ?></td>
      <td><?php echo number_format($tampil['bayar']) ?>

        <form id="form<?php echo $tampil['inv'] ?>" onsubmit="editBayar('<?php echo $tampil['inv'] ?>');return false" style="display: none">
                <input type="hidden" name="inv" class="form-control" value="<?php echo $tampil['inv'] ?>">
                <input type="hidden" name="total" class="form-control" value="<?php echo $tampil['total'] ?>">
                <div class="form-group">
                  <label>Tanggal Bayar</label>
                  <input type="text" name="tanggal_bayar" class="tgl form-control" value="<?php echo date('Y-m-d') ?>">                
                </div>
                 <div class="form-group">
                  <label>Bayar</label>
                   <input id="bayar<?php echo $tampil['inv'] ?>" type="" name="bayar" class="form-control" autocomplete="off" autofocus="autofocus" style="width: 400px">              
                </div>
               
                <div class="form-group">
                  <button class="btn btn-success" type="submit" style="width: 400px">OK</button>
                </div>
                  
        </form>
      </td>
      <td><?php echo number_format($tampil['kembalian']) ?></td>
      <td><?php echo $tampil['status_bayar'] ?></td>
      <td><?php echo $tampil['tanggal_bayar'] ?></td>

      <td> <a target="_BLANK" href="print.php?inv=<?php echo $tampil['inv']  ?>" style="color: #FFF" class="edit btn btn-danger" data-toggle="tooltip" data-placement="top" title="print" ><i class="fa fa-print"></i> Print</a></td>
    </tr>


  <?php $no++;} ?>
  </tbody>
</table>
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