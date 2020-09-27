<?php


// KONEKSI
require 'action/functions.php';

//TAMPIL PELANGGAN
$datatampilpelanggan = tampilpelanggan ("SELECT * FROM pelanggan");


// TAMBAH DATA PELANGGAN
if (isset($_POST ["tambahPelanggan"]))
  {
    if ( tambahPelanggan ($_POST) > 0)
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
                  position: 'top-center',
                    icon: 'error',
                    title: 'error',
                    text: 'DATA yang dimasukan sudah Tertera, Silahkan Periksa Kembali',
                    showConfirmButton: true,
                    confirmButtonColor : '#d33',
                    timer: 3500
              });   
        },20);  
         
        </script>";
        echo "<meta http-equiv='refresh' content='1'>";
  
    }

    
  }



 // EDIT DATA PELANGGAN
if (isset($_POST ["editPelanggan"]))
  {
    if ( editPelanggan ($_POST) > 0)
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
       echo "
          
         <script type='text/javascript'>
     Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: 'error',
                    text: 'Data GAGAL di update, Silahkan Periksa Kembali !!',
                    showConfirmButton: true,
                    confirmButtonColor : '#d33',
                    timer: 3500
                   })
        </script>";
  
    }

    
  }


?>




 <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <!-- form Search -->
      

                      <div class="col-lg-6 col-7">
                            <!-- Search form -->
                              <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main" action="" method="post">
                                <div class="form-group mb-0">
                                  <div class="input-group input-group-alternative input-group-merge">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Search" id="cari" name="keyword"  name="cariPelanggan" type="text" autocomplete="OFF" >
                                     <hidden>
                                     <button class="close" aria-hidden="true"  type="submit" name="cariPelanggan" id="keyword"></button> 
                                   </hidden>
                                  </div>
                                </div>
                                <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                              </form>
                              <!-- Akhir Search form -->
                              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4"> </nav>
                      </div>

                      <!-- Button Tambah Data -->
                      <div class="col-lg-6 col-5 text-right">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#tambahPelanggan"> <i class="fa fa-plus"> </i> Tambah Data</button>
                      </div>
                      <!-- Akhir Button Tambah Data -->
          </div>
        </div>
      </div>
    </div>


<!-- Bagian content -->
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">
        <!-- header  -->
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h3 class="mb-0">Data Pelanggan</h3>
                    </div>
                    <div class="col-4 text-right">
                      <button type="button" class="btn  btn-sm btn-primary" data-toggle="modal" data-target="#tambahPelanggan"> <i class="fa fa-plus"> </i> Tambah Data</button>
                    </div>
                  </div>
                </div>
        <!-- akhir header  -->
                <br>
                  <!-- TABEL -->
                        <div  class="table-responsive">
                            <table id="datpelanggan" class="table align-items-center table-flush">
                              <thead class="thead-light">
                                <tr>
                                  <th scope="col" class="sort" >No</th>
                                  <th scope="col" class="sort" >Nama</th>
                                  <th scope="col" class="sort" >Telpon</th>
                                  <th scope="col">E-Mail</th>
                                  <th scope="col"></th>
                                </tr>
                              </thead>
                                <tbody class="list">
                                  <!-- Batas Tabel -->
                                        <?php $i=1 ;?>
                                        <?php foreach ($datatampilpelanggan as $row) :  ?>
                                              <tr>
                                                  <td><?php echo $i ; ?></td>
                                                  <td style="width: 30%;"><?php echo $row["nama_pelanggan"] ;?></td>
                                                  <td style="width: 30%;" ><?php echo $row["telpon_pelanggan"] ;?></td>
                                                  <td style="width: 30%;"><?php echo $row["email_pelanggan"] ;?></td>
                                                  <td style="width: 10%;" >
                                                      <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target=".editPelanggan<?php echo $row['id_pelanggan'];?>"> <i class="fa fa-edit"> </i>
                                                      </button>

                                                      <a href="action/act_hapus_pelanggan.php?id_pelanggan=<?= $row["id_pelanggan"] ;?>" class="btn-hapusPelanggan" >
                                                        <button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus" ><i class="fa fa-trash"></i></button>
                                                      </a>

                                                      <script>
                                                          $('.btn-hapusPelanggan').on ('click' , function (e) {
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

                            
                                              </tr> 
                                              <?php $i++ ;?>
                                              <?php endforeach; ?>
                                             </tr>
                                </tbody>
                            </table>
                            <br>
                      </div>
        <!-- Akhir Tabel -->
                    
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
</div> <!-- Akhir container -->





      <!-- Modal TAMBAH Pelanggan -->
                        <div class="modal fade" id="tambahPelanggan" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1>Tambah Data Pelanggan</h1>
                                  <button type="button" class="close" data-dismiss="modal" id="tomboltambah" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body" align="left">
                                  <form action="" method="post">
                                    <div class="row">
                                        <div class="col-lg-12">
                                          <div class="form-group">
                                            <label class="form-control-label" >Nama</label>
                                            <input type="text"  name="nama_pelanggan" required class="form-control" placeholder="Nama">
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <label class="form-control-label" >Telpon</label>
                                            <input type="text" name="telpon_pelanggan" required class="form-control" placeholder="Telpon">
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <label class="form-control-label" >E-mail</label>
                                            <input type="text" name="email_pelanggan" required class="form-control" placeholder="E-mail">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary" name="tambahPelanggan" >Tambah Data !</button>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                      </div>

<!-- Akhir Modal TAMBAH -->


<!-- Modal EDIT PELANGGAN -->

<?php $no = 0;
foreach ($datatampilpelanggan as $row ) : $no++ ;
?>
                      <div class="modal fade editPelanggan<?php echo $row['id_pelanggan'];?>"  tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1>Edit Data Pelanggan</h1>
                                  <button type="button" class="close" data-dismiss="modal" id="tomboltambah" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body" align="left">
                                  <form action="" method="post">
                                    <div class="row">

                                      <input type="hidden" name="id_pelanggan" required value="<?php echo $row['id_pelanggan'];?>">

                                         <!-- HIDDEN -->
                                        <div class="col-lg-12">
                                          <div class="form-group">
                                            <label class="form-control-label" >Nama</label>
                                            <input type="text"  name="nama_pelanggan" required class="form-control" value="<?php echo $row['nama_pelanggan'];?>">
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <label class="form-control-label" >Telpon</label>
                                            <input type="text" name="telpon_pelanggan" required class="form-control" value="<?php echo $row['telpon_pelanggan'];?>">
                                          </div>
                                        </div>
                                        <div class="col-lg-6">
                                          <div class="form-group">
                                            <label class="form-control-label" >E-mail</label>
                                            <input type="text" name="email_pelanggan" required class="form-control" value="<?php echo $row['email_pelanggan'];?>">
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary" name="editPelanggan" >Simpan Data !</button>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                      </div>

<?php endforeach ?>

<!-- akhir Modal EDIT PELANGGAN -->








