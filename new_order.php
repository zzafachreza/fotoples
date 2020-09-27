<?php

session_start();

if (!isset($_SESSION["login"])) 
{
  echo "<meta http-equiv='refresh' content='0 url=login.php'>";
  exit;
}

// error_reporting(0);

//KONEKSI
require 'action/functions.php';

// TAMPIL DATA MEDIA
$datatampil = tampilmedia ("SELECT * FROM kategori_cetak ");


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
  <link rel="stylesheet" href="assets/dataTables/datatables/dataTables.bootstrap4.css">

  <script src="assets/js/jquery-3.4.1.min.js"></script>
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
            <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="dashboard.html" class="nav-link">
              <span class="nav-link-inner--text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="login.html" class="nav-link">
              <span class="nav-link-inner--text">Login</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="register.html" class="nav-link">
              <span class="nav-link-inner--text">Register</span>
            </a>
          </li>
        </ul>
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
              <span class="nav-link-inner--text ">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="new_order.php" class="nav-link">
              <span class="nav-link-inner--text font-weight-bold ">Create New Order</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="register.html" class="nav-link">
              <span class="nav-link-inner--text">Status Order</span>
            </a>
          </li>
        </ul>
        

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

       <!-- Page content -->
        <div class="container-fluid mt--6">
          <div class="row">

              <div class="col-3">
                  <div class="card card-profile">
                  
                 
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                      <div class="d-flex justify-content-between">
                      <h3 class="mb-0">Select Customer</h3>
                       
                      </div>
                    </div>
                    <div class="card-body pt-0">
                      <div class="row">
                        <div class="col-sm-12">

                            <form id="dataForm" >
                                <select class="form-control" name="id_pelanggan" required="required" id="pelanggan" style="width: 100%">
                                  <option></option>
                                    <?php
                                         $sql="select * from pelanggan";
                                         $hasil=mysqli_query($conn,$sql);
                                         while ($data = mysqli_fetch_array($hasil)) {
                                          ?>
                                          <option  value="<?php echo $data['id_pelanggan'];?>"><?php echo $data['nama_pelanggan'];?></option>
                                          <?php
                                          }
                                          ?>
                                </select>
                      
              
                        </div>
                        <div class="col-6">
                          <input type="" name="telpon_pelanggan" class="form-control" readonly="readonly" required="required">
                        </div>
                          <div class="col-6">
                           <input type="" name="email_pelanggan" class="form-control" readonly="readonly" required="required">
                        </div>
                      </div>
                    
                    </div>
                  </div>
              </div>
            
            <div class="col-xl-9 order-xl-1">
              <div class="card">
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h3 class="mb-0">Create New Order</h3>
                      <span>Total : </span>
                      <span class="Htotal" style="font-weight: bold;font-size: xx-large;"></span>

                      <input type="hidden" name="Htotal2" id="Htotal2">
                        <a id="payment" class="btn btn-success" style="color: #FFF; width: 200px"> Payment <i class="fa fa-money-bill"> </i></a>
                         <a id="btnTutup" class="btn btn-primary" style="color: #FFF; width: 200px;display: none;"> Kembali <i class="fa fa-arrow-up"> </i></a>
                    </div>

                    <div class="col-4 text-right">

                      <button type="submit" class="btn btn-primary"> Tambah <i class="fa fa-plus"> </i></button>

                    </div>
                  </div>
                </div>
                <div class="card-body">

                  <table class="table table-bordered" id="dataPaymetlist" style="display: none;">
                    <tr>
                      <th>Total</th>
                      <th>Bayar</th>
                      <th>Sisa</th>
                      <th></th>
                    </tr>
                       <tr>
                      <th> <span class="Htotal" style="font-weight: bold;font-size: xx-large;"></span></th>
                      <th>
                        <input type="" name="bayar" class="form-control" id="bayar" autofocus="autofocus">
                      </th>
                      <th>
                        <span id="kembalian2" style="font-weight: bold;font-size: xx-large;">0</span></th>
                        <input type="hidden" name="kembalian" id="kembalian" class="form-control">
                      </th>
                      <th>
                        <button id="btnSelesai" class="btn btn-success"><i class="fa fa-check"></i> selesai</button>
                      </th>
                    </tr>
                  </table>
                  
                  <table cellpadding="3" id="dataFormList" class="">
                              <thead class="thead-light" spacing>
                                <tr>
                                  <th><label class="form-control-label" >Kategori</label></th>
                                  <th><label class="form-control-label" >Media Cetak</label></th>
                                  <th><label class="form-control-label" >Harga</label></th>
                                  <th><label class="form-control-label" >Qty</label></th>
                                  <th><label class="form-control-label" >Sub Total</label></th>
                                  <th><label class="form-control-label" >Keterangan</label></th>
                                  <th><label class="form-control-label" ></label></th>
                                </tr>
                              </thead>
                                <tbody>
                                  <!-- Batas Tabel -->
                         
                                    
                                    <tr>
                                        <td style="width: 15%;">

                                          <select class="form-control" name="Kategori" id="kategori">
                                          <option>...</option>
                                         <?php
                                         $sql="select * from kategori_cetak";
                                         $hasil=mysqli_query($conn,$sql);
                                         while ($data = mysqli_fetch_array($hasil)) {
                                          ?>
                                          <option  value="<?php echo $data['id_kategori'];?>"><?php echo $data['nama_kategori'];?></option>
                                          <?php
                                          }
                                          ?>
                                         </select>


                                        </td>
                                        <td style="width: 20%;">
                                         
                                          <select class="form-control" name="media" id="media" selected
                                          >
                                           <option>...</option>
                           
                                          </select>


                                        </td>

                                        <td style="width: 15%;">
                                          <input class="form-control" name="harga" id="harga" required="required">
                                        </td>
                                        <td style="width: 10%;">
                                          <input type="number" name="qty" id="qty" class="form-control" required="required" />
                                        </td>
                                        <td style="width: 17%;" >
                                          <input type="number" id="Sub_total" name="subtotal" class="form-control" readonly="re
                                          " />
                                        </td>
                                        <td style="width: 20%;" >

                                          <input type="text" id="keterangan" name="keterangan" class="form-control">
                                        </td>
                                        <td style="width: 3%;">
                                          <a href="action/act_hapus_pelanggan.php?id_pelanggan=<?= $row["id_pelanggan"] ;?>" class="btn-hapusPelanggan" >
                                                        <button type="reset" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Hapus" ><i class="fa fa-times"></i></button>
                                                      </a>
                                        </td> 
                        
                                             
                                    </tr>
                                  </form>
                               
                                </tbody>
                                    
                            </table>
                            <!-- <input type="text" name="stok" id="stok" class="form-control" value=""> -->
                
                </div>

               

              </div>




            </div>



           
          </div> <!-- Akhir Page content -->

          <div id="dataTransaksi" class="col-sm-12 card" style="padding: 2%">
            
          </div>
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

   <div class="modal fade" id="modalPayment" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1> Tambah Kasir </h1>
                                  <button type="button" class="close" data-dismiss="modal" id="tomboltambah" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body" align="left">
                                  <form action="" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <label class="form-control-label" >Username</label>
                                            <input type="text"  name="username" required class="form-control" placeholder="Username">
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <label class="form-control-label" >Nama Lengkap</label>
                                            <input type="text" name="nama_kasir" required class="form-control" placeholder="Nama Lengkap">
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <label class="form-control-label" >Password</label>
                                            <input type="password" name="password" required class="form-control" placeholder="Password">
                                          </div>
                                        </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary" name="tambahkasir" >Tambah Data !</button>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                      </div>
  <!-- Scripts -->
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
    
    $("#btnSelesai").click(function(e){
      e.preventDefault();
        if ($("#bayar").val()=="") {
          $("#bayar").focus();
        }else{

          var id_pelanggan = $("#pelanggan").val();
          var total = $("#Htotal2").val();
          var bayar = $("#bayar").val();
          var kembalian = $("#kembalian").val();

           $.ajax({
                type: "POST",
                url: "action/insert_bayar.php",
                data:{
                  id_pelanggan:id_pelanggan,
                  total:total,
                  bayar:bayar,
                  kembalian:kembalian
                },
                success: function(data){
                  getDataTransaksi(id_pelanggan);
                  $("#dataFormList").show();
                  $("#dataPaymetlist").hide();
                  $("#btnTutup").hide();
                  $("#payment").show();
                }
            });


        }
    })

    $("#bayar").keyup(function(e){
      e.preventDefault();
      var total = $("#Htotal2").val();
      var bayar = $(this).val();
      var kembalian = total-bayar;
      console.log(total)
      $("#kembalian").val(kembalian)
          $("#kembalian2").text(Number((kembalian).toFixed(1)).toLocaleString())
    })

    $("#payment").click(function(e){
      e.preventDefault();
       var total = $("#Htotal2").val();
       // alert(total);
           $("#bayar").focus();
       $(this).hide();
       $("#btnTutup").show();
   
       $("#dataFormList").hide();
       $("#dataPaymetlist").show();

    })

    $("#btnTutup").click(function(e){
      e.preventDefault();
      $(this).hide();
      $("#payment").show();
       $("#dataFormList").show();
       $("#dataPaymetlist").hide();
    })

 
       $("#kategori").change(function(){
            // variabel dari nilai combo box kategori
            var id_kategori = $("#kategori").val();

            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                type: "POST",
                dataType: "html",
                url: "ambil-data.php",
                data: "kategori="+id_kategori,
                success: function(data){
                   $("#media").html(data);
                         $("#media").first().focus();;
                }
            });
        });


       $("#media").change(function(){
            // variabel dari nilai combo box media
            var id_media = $("#media").val();

            // Menggunakan ajax untuk mengirim dan dan menerima data dari server.
            $.ajax({
              url:'action/get_media.php',
              type:'GET',
              data : {
                id_media : id_media
              },success:function(data){
                var data = JSON.parse(data);
                // console.log(data);
                $("input[name='harga']").val(data.harga);
                $("#qty").focus();

                $("#qty").change(function(e){
                  e.preventDefault();
                    $("#keterangan").focus();
                    var Sub_total = $(this).val() * $("#harga").val();
                    $("#Sub_total").val(Sub_total);
                })
              }
            })
           
        });


       // ajax abu hanif

       $("#pelanggan").change(function(e){
        e.preventDefault();

          var id_pelanggan = $(this).val();

          $.ajax({
            url:'action/get_pelanggan.php',
            type:'GET',
            data : {
              id_pelanggan : id_pelanggan
            },success:function(data){
              var data = JSON.parse(data);
              getDataTransaksi(id_pelanggan);
              // console.log(data);
              $("input[name='telpon_pelanggan']").val(data.telpon_pelanggan);
              $("input[name='email_pelanggan']").val(data.email_pelanggan);
            }
          })
       })

       // form submit


       $("#dataForm").submit(function(e){
        e.preventDefault();
        var data = $(this).serialize();

        var id_pelanggan = $("#pelanggan").val();
        // console.log(id_pelanggan);
          

          $.ajax({
            url:'action/insert_transaksi.php',
            type:'GET',
            data :data
            ,success:function(data){
              // var data = JSON.parse(data);
              $("#Sub_total").val("");
              $("#keterangan").val("");
              $("#harga").val("");
              $("#qty").val("");
              $("#kategori").val("");
              $("#media").val("");
              $("#kategori").first().focus();;

   
             
              getDataTransaksi(id_pelanggan);
             
            }
          })


       })



         function getDataTransaksi(id_pelanggan){
           $.ajax({
            url:'action/get_transaksi.php',
            type:'GET',
            data :{
              id_pelanggan:id_pelanggan
            }
            ,success:function(data){
              // var data = JSON.parse(data);

              $("#dataTransaksi").html(data)
              // console.log(data);
             
            }
          })
         }

                       // Swal.fire({
                       //        position: 'top-center',
                       //        icon: 'success',
                       //        title: 'Login Berhasil',
                       //        text: 'Order Berhasil dibuat , Have a Greet Day :) ',
                       //        showConfirmButton: true,
                       //        timer: 500
                       //       })
    </script>



</body>




</html>