


<?php


// Koneksi
require 'action/functions.php';

// TAMPIL OPERATOR DESAIN
$datatampil = tampilopd ("SELECT * FROM operator_desain");


if (isset($_POST ["carimedia"]))
  {
    $datatampil = carimedia ($_POST["keyword"]);   
  }


// TAMBAH OPERATOR DESAIN

if (isset($_POST ["tambahopd"]))
  {
    if ( tambahopd ($_POST) > 0)
    {
      echo "<script type='text/javascript'>
          
         Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Berhasil',
                    text: 'Data Berhasil ditambah',
                    showConfirmButton: false,
                    timer: 2500
                   })

        </script>";
        echo "<meta http-equiv='refresh' content='1'>";
    }
    else
    {
       echo "<script type='text/javascript'>
        setTimeout(function () { 
          Swal.fire({
                  position: '',
                    icon: '',
                    title: '',
                    text: '',
                  showConfirmButton: false;
              });   
        },20);  
         
        </script>";
        echo "<meta http-equiv='refresh' content='1'>";
  
  
    }

    
  }



 // EDIT DATA OPERATOR DESAIN

if (isset($_POST ["editDataOpd"]))
  {
    if ( editDataOpd ($_POST) > 0)
    {
     echo "<script type='text/javascript'>
          
         Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Berhasil',
                    text: 'Data Berhasil diupdate',
                    showConfirmButton: false,
                    timer: 2500
                   })

        </script>";
        echo "<meta http-equiv='refresh' content='1'>";
    }
    else
    {
      echo "<script type='text/javascript'>
          
         Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: 'ERROR',
                    text: 'Data Gagal diupdate, Pastikan Dengan Benar Data yang anda Masukkan !',
                    showConfirmButton: true,
                    confirmButtonColor : '#d33',
                    timer: 2500
                   })

        </script>";
        echo "<meta http-equiv='refresh' content='1'>";
  
    }

    
  }





// TAMPIL KASIR
$datatampilkasir = tampilkasir ("SELECT * FROM kasir");

// TAMBAH KASIR

if (isset($_POST ["tambahkasir"]))
  {
    if ( tambahkasir ($_POST) > 0)
    {
      echo "<script type='text/javascript'>
          
         Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Berhasil',
                    text: 'Data Berhasil ditambah',
                    showConfirmButton: false,
                    timer: 2500
                   })

        </script>";
        echo "<meta http-equiv='refresh' content='1'>";
    }
    else
    {
       echo "<script type='text/javascript'>
        setTimeout(function () { 
          Swal.fire({
                  position: '',
                    icon: '',
                    title: '',
                    text: '',
                  showConfirmButton: false;
              });   
        },20);  
        window.setTimeout(function(){ 
          document.location.href = 'page_pegawai.php';
        } ,5000); 
        </script>";
  
    }

    
  }



  // EDIT DATA KASIR

if (isset($_POST ["editDataKasir"]))
  {
    if ( editDataKasir ($_POST) > 0)
    {
     echo "<script type='text/javascript'>
          
         Swal.fire({
                    position: 'top-center',
                    icon: 'success',
                    title: 'Berhasil',
                    text: 'Data Berhasil diupdate',
                    showConfirmButton: false,
                   })

        </script>";
        echo "<meta http-equiv='refresh' content='1'>";
    }
    else
    {
      echo "<script type='text/javascript'>
          
         Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: 'ERROR',
                    text: 'Data Gagal diupdate, Silahkan Periksa Kembali',
                    showConfirmButton: true,
                    confirmButtonColor : '#d33',
                    timer: 2500
                   })

        </script>";
        echo "<meta http-equiv='refresh' content='1'>";
  
    }

    
  }


?>

 <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            

                      
          </div>
        </div>
      </div>
    </div>


<!-- Bagian content -->
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
          <div class="card" >
                    <!-- Card header -->
                    <div class="card-header">
                      <div class="row align-items-center">
                        <div class="col-8">
                          <h2 class="mb-0">Operator Desain </h2>
                        </div>
                        <div class="col-4 text-right">
                          <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahopd"> <i class="fa fa-plus"> </i> Tambah Data</button>
                        </div>
                      </div>
                    </div>

                    <!-- TABEL -->
                          <div id="table" class="table-responsive">
                            <table class="table align-items-center table-flush">
                              <thead class="thead-light">
                                <tr>
                                  <th scope="col" class="sort" >No</th>
                                  <th scope="col" class="sort" >Nama</th>
                                  <th scope="col" class="sort" >Username</th>
                                  <th scope="col" class="sort" >Email </th>
                                  <th scope="col" class="sort" >Telpon </th>
                                  <th scope="col"></th>
                                </tr>
                              </thead>
                                <tbody class="list">
                                  <!-- Batas Tabel -->
                                        <?php $i=1 ;?>
                                        <?php foreach ($datatampil as $row) :  ?>
                                              <tr>
                                                  <td><?php echo $i ; ?></td>
                                                  <td style="width: 22%;" ><?php echo $row["nama_opd"] ;?></td>
                                                  <td style="width: 22%;" ><?php echo $row["username"] ;?></td>
                                                  <td style="width: 22%;" ><?php echo $row["email_opd"] ;?></td>
                                                  <td style="width: 22%;" ><?php echo $row["telpon_opd"] ;?></td>
                                                  <td style="width: 5%;">
                                                      <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target=".editopd<?php echo $row['id_opd'];?>"> <i class="fa fa-edit"> </i>
                                                      </button>
                                                      <!-- <a href="action/act_hapus_opd.php?id_opd=<?= $row["id_opd"] ;?>" onclick = "return confirm ('Yakin Ingin Menghapus ?');" 
                                                        <button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus" ><i class="fa fa-trash"></i></button>
                                                      </a> -->

                                                      <a href="action/act_hapus_opd.php?id_opd=<?= $row["id_opd"] ;?>" class="btn-hapusopd" >
                                                        <button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus" ><i class="fa fa-trash"></i></button>
                                                      </a>

                                                      <script>
                                                          $('.btn-hapusopd').on ('click' , function (e) {
                                                            e.preventDefault ();
                                                            const href = $(this). attr ('href')

                                                            Swal.fire({
                                                            title: 'Anda Yakin ?',
                                                            text: "Anda tidak dapat mengembalikan data yang terhapus !",
                                                            icon: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor : '#3085d6',
                                                            cancelButtonColor : '#d33',
                                                            confirmButtonText : 'Hapus',


                                                            }).then ((result) => {
                                                              if (result.value)
                                                                {
                                                                 document.location.href = href ;
                                                                
                                                                 Swal.fire({
                                                                            position: 'top-center',
                                                                            icon: 'success',
                                                                            title: 'Berhasil',
                                                                            text: 'Data Berhasil diHapus',
                                                                            showConfirmButton: false,
                                                                           })
                                                                }
                                                                location.reload() ;
                                                            })



                                                          })
                                                      </script>
                                                  </td>

                                
                                              </tr> 
                                              <?php $i++ ;?>
                                              <?php endforeach; ?>
                                             </tr>
                                </tbody>
                            </table>
                    </div>
        <!-- Akhir Bagian content -->
          </div> <!-- Akhir card -->

          <div class="card" >
                    <!-- Card header -->
                    <div class="card-header" >
                      <div class="row align-items-center ">
                        <div class="col-8">
                          <h2 class="mb-0">Kasir </h2>
                        </div>
                        <div class="col-4 text-right">
                          <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahkasir"> <i class="fa fa-plus"> </i> Tambah Data</button>
                        </div>
                      </div>
                    </div>
                  
                    <!-- TABEL -->
                          <div id="table" class="table-responsive">
                            <table class="table align-items-center table-flush">
                              <thead class="thead-light">
                                <tr>
                                  <th scope="col" class="sort" >No</th>
                                  <th scope="col" class="sort" >Nama</th>
                                  <th scope="col" class="sort" >Username</th>
                                  <th scope="col" class="sort" >Email </th>
                                  <th scope="col" class="sort" >Telpon </th>
                                  <th scope="col"></th>
                                </tr>
                              </thead>
                                <tbody class="list">
                                  <!-- Batas Tabel -->
                                        <?php $i=1 ;?>
                                        <?php foreach ($datatampilkasir as $row) :  ?>
                                              <tr>
                                                  <td><?php echo $i ; ?></td>
                                                  <td style="width: 22%;"><?php echo $row["nama_kasir"] ;?></td>
                                                  <td style="width: 22%;"><?php echo $row["username"] ;?></td>
                                                  <td style="width: 22%;"><?php echo $row["email_kasir"] ;?></td>
                                                  <td style="width: 22%;"><?php echo $row["telpon_kasir"] ;?></td>
                                                  <td style="width: 5%;">
                                                      <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target=".editkasir<?php echo $row['id_kasir'];?>"> <i class="fa fa-edit"> </i>
                                                      </button>
                                                      <!-- <a href="action/act_hapus_kasir.php?id_kasir=<?= $row["id_kasir"] ;?>" onclick = "return confirm ('Yakin Ingin Menghapus ?');" 
                                                        <button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus" ><i class="fa fa-trash"></i></button>
                                                      </a> -->

                                                      <a href="action/act_hapus_kasir.php?id_kasir=<?= $row["id_kasir"] ;?>" class="btn-hapuskasir" >
                                                        <button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus" ><i class="fa fa-trash"></i></button>
                                                      </a>

                                                      <script>
                                                          $('.btn-hapuskasir').on ('click' , function (e) {
                                                            e.preventDefault ();
                                                            const href = $(this). attr ('href')

                                                            Swal.fire({
                                                            title: 'Anda Yakin ?',
                                                            text: "Anda tidak dapat mengembalikan data yang terhapus !",
                                                            icon: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonColor : '#3085d6',
                                                            cancelButtonColor : '#d33',
                                                            confirmButtonText : 'Hapus',


                                                            }).then ((result) => {
                                                              if (result.value)
                                                                {
                                                                 document.location.href = href ;
                                                                
                                                                 Swal.fire({
                                                                            position: 'top-center',
                                                                            icon: 'success',
                                                                            title: 'Berhasil',
                                                                            text: 'Data Berhasil diHapus',
                                                                            showConfirmButton: false,
                                                                           })
                                                                }
                                                                location.reload() ;
                                                            })



                                                          })
                                                      </script>
                                                      
                                                  </td>

                                
                                              </tr> 
                                              <?php $i++ ;?>
                                              <?php endforeach; ?>
                                             </tr>
                                </tbody>
                            </table>
                    </div>
        <!-- Akhir Bagian content -->
          </div> <!-- Akhir card -->


    </div> <!-- Akhir col -->
  </div> <!-- Akhir row -->
          <footer class="footer pt-0">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6">
                <div class="copyright text-center  text-lg-left  text-muted">
                  &copy; 2020 <a href="#" class="font-weight-bold ml-1" target="_blank">Rizki Ubaidillah</a>
                </div>
              </div>
            </div>
          </footer>

</div> <!-- Akhir container -->




     <!-- Modal TAMBAH OPERATOR DESAIN -->
                        <div class="modal fade" id="tambahopd" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1>Tambah Operator Desain</h1>
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
                                            <input type="text" name="nama_opd" required class="form-control" placeholder="Nama Lengkap">
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <label class="form-control-label" >Password</label>
                                            <input type="password" name="password" required class="form-control" placeholder="Password">
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <label class="form-control-label" >E-Mail</label>
                                            <input type="email" class="form-control" placeholder="Email" name="email_opd" required>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <label class="form-control-label" >Konfirmasi Password</label>
                                            <input type="password" name="pass" required class="form-control" placeholder="Konfirmasi Password" >
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <label class="form-control-label" >Telpon</label>
                                            <input type="text" name="telpon_opd" required class="form-control" placeholder="Nomor Telpon">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary" name="tambahopd" >Tambah Data !</button>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                      </div>

<!-- Akhir Modal TAMBAH -->



 <!-- Modal TAMBAH OPERATOR KASIR -->
                        <div class="modal fade" id="tambahkasir" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
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
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <label class="form-control-label" >E-Mail</label>
                                            <input type="email" class="form-control" placeholder="Email" name="email_kasir" required>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <label class="form-control-label" >Konfirmasi Password</label>
                                            <input type="password" name="pass" required class="form-control" placeholder="Konfirmasi Password" >
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <label class="form-control-label">Telpon</label>
                                            <input type="text" name="telpon_kasir" required class="form-control" placeholder="Nomor Telpon">
                                          </div>
                                        </div>
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

<!-- Akhir Modal TAMBAH -->




<!-- Modal UBAH KASIR -->

<?php $no = 0;
foreach ($datatampilkasir as $row ) : $no++ ;
?>
                      <div class="modal fade editkasir<?php echo $row['id_kasir'];?>"  tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                         <div class="modal-dialog modal-sm modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1> Ubah Data Kasir </h1>
                                  <button type="button" class="close" data-dismiss="modal" id="tomboltambah" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body" align="left">
                                  <form action="" method="post">
                                    <div class="row">

                                       <input type="hidden" name="id_kasir" required value="<?php echo $row['id_kasir'];?>">
                                       <input type="hidden" name="username" required value="<?php echo $row['username'];?>">
                                        <input type="hidden" name="password" required value="<?php echo $row['password'];?>">
                                         <input type="hidden" name="pass" required value="<?php echo $row['pass'];?>">

                                         <!-- HIDDEN -->


                                        <div class="col-lg-12">
                                          <div class="form-group">
                                            <label class="form-control-label" >Nama Lengkap</label>
                                            <input type="text" name="nama_kasir" required class="form-control" value="<?php echo $row['nama_kasir'];?>">
                                          </div>
                                        </div>
                                        <div class="col-lg-12">
                                          <div class="form-group">
                                            <label class="form-control-label" >E-Mail</label>
                                            <input type="email" class="form-control" name="email_kasir" required value="<?php echo $row['email_kasir'];?>">
                                          </div>
                                        </div>
                                        <div class="col-lg-12">
                                          <div class="form-group">
                                            <label class="form-control-label" >Telpon</label>
                                            <input type="text" class="form-control" name="telpon_kasir" required value="<?php echo $row['telpon_kasir'];?>">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary" name="editDataKasir" >Simpan Data !</button>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                      </div>

<?php endforeach ?>

<!-- akhir Modal UBAH KASIR -->


<!-- Modal UBAH OPD -->

<?php $no = 0;
foreach ($datatampil as $row ) : $no++ ;
?>
                      <div class="modal fade editopd<?php echo $row['id_opd'];?>"  tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                         <div class="modal-dialog modal-sm modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1> Ubah Data </h1>
                                  <button type="button" class="close" data-dismiss="modal" id="tomboltambah" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body" align="left">
                                  <form action="" method="post">
                                    <div class="row">

                                       <input type="hidden" name="id_opd" required value="<?php echo $row['id_opd'];?>">
                                       <input type="hidden" name="username" required value="<?php echo $row['username'];?>">
                                        <input type="hidden" name="password" required value="<?php echo $row['password'];?>">
                                         <input type="hidden" name="pass" required value="<?php echo $row['pass'];?>">

                                         <!-- HIDDEN -->


                                        <div class="col-lg-12">
                                          <div class="form-group">
                                            <label class="form-control-label" >Nama Lengkap</label>
                                            <input type="text" name="nama_opd" required class="form-control" value="<?php echo $row['nama_opd'];?>">
                                          </div>
                                        </div>
                                        <div class="col-lg-12">
                                          <div class="form-group">
                                            <label class="form-control-label" >E-Mail</label>
                                            <input type="email" class="form-control" name="email_opd" required value="<?php echo $row['email_opd'];?>">
                                          </div>
                                        </div>
                                        <div class="col-lg-12">
                                          <div class="form-group">
                                            <label class="form-control-label" >Telpon</label>
                                            <input type="text" class="form-control" name="telpon_opd" required value="<?php echo $row['telpon_opd'];?>">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary" name="editDataOpd" >Simpan Data</button>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                      </div>

<?php endforeach ?>

<!-- akhir Modal UBAH OPD-->








