<?php


//KONEKSI
require 'action/functions.php';

// TAMPIL DATA MEDIA
$datatampil = tampilmedia ("SELECT * FROM media_cetak INNER JOIN kategori_cetak on media_cetak.id_kategori = kategori_cetak.id_kategori ");



// TAMBAH DATA MEDIA
if (isset($_POST ["tambahmedia"]))
  {
    if ( tambahmedia ($_POST) > 0)
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
          
         Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: 'Error',
                    text: 'Data Gagal ditambah',
                    showConfirmButton: false,
                    timer: 2500
                   })

        </script>";
        echo "<meta http-equiv='refresh' content='1'>";
  
    }

    
  }


//EDIT DATA MEDIA
if (isset($_POST ["editmedia"]))
  {
    if ( editmedia ($_POST) > 0)
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
                    text: 'Data GAGAL di update, Pastikan data yang anda masukan benar !!',
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
      

                      <div class="col-lg-6 col-7">
                           
                      </div>

                      <div class="col-lg-6 col-5 text-right">
                        
                      </div>
                     
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
                          <h2 class="mb-0">Data Media Cetak</h2>
                        </div>
                        <div class="col-4 text-right">
                          <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahdatamedia"> <i class="fa fa-plus"> </i> Tambah Data</button>
                        </div>
                      </div>
                    </div>
                    <!-- TABEL -->
                    <br>
                          <div  class="table-responsive">
                            <table id="datamedia" class="table align-items-center table-flush" >
                              <thead class="thead-light">
                                <tr>
                                  <th scope="col" class="sort" >No</th>
                                  <th scope="col" class="sort" >Kategori</th>
                                  <th scope="col" class="sort" >Media Cetak</th>
                                  <th scope="col">Stok</th>
                                  <th scope="col" class="sort" >Harga</th>
                                  <th scope="col"></th>
                                </tr>
                              </thead>
                                <tbody>
                                  <!-- Batas Tabel -->
                                        <?php $i=1 ;?>
                                        <?php foreach ($datatampil as $row) :  ?>
                                              <tr>
                                                  <td><?php echo $i ; ?></td>
                                                  <td style="width: 20%;" ><?php echo $row["nama_kategori"] ;?></td>
                                                  <td style="width: 25%;" ><?php echo $row["nama_media"] ;?></td>
                                                  <td style="width: 15%;" ><?php echo $row["stok"]." Pcs" ;?></td>
                                                  <td style="width: 22%;" ><?php echo "Rp. ".number_format($row["harga"]) ;?></td>
                                                  <td style="width: 5%;" >
                                                      <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target=".editmedia<?php echo $row['id_media'];?>"> <i class="fa fa-edit"> </i>
                                                      </button>

                                                      <a href="action/act_hapus_media.php?id_media=<?= $row["id_media"] ;?>" class="btn-hapusmedia" >
                                                        <button class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus" ><i class="fa fa-trash"></i></button>
                                                      </a>

                                                      <script>
                                                          $('.btn-hapusmedia').on ('click' , function (e) {
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
                                              <?php $i++ ;?>
                                              <?php endforeach; ?>
                                             </tr>
                                </tbody>
                            </table>
                            <br>
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
</div> <!-- Akhir container -->





     <!-- Modal TAMBAH -->
                        <div class="modal fade" id="tambahdatamedia" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1>Tambah Data Media Cetak</h1>
                                  <button type="button" class="close" data-dismiss="modal" id="tomboltambah" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body" align="left">
                                  <form action="" method="post">
                                  <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">Kategori</label>
                                      <div class="col-sm-8">
                                        <select class="custom-select" name="id_kategori" required>
                                          
                                          <option selected disabled value="">---- Pilih Kategori Media cetak ----</option>
                                          <?php 
                                          $tampilKategori = tampilKategori ("SELECT * FROM kategori_cetak ");
                                            foreach ($tampilKategori as $data ) : $no++ ;
                                          ?>

                                          <option  value="<?php echo $data['id_kategori'];?>" required="" ><?php echo $data['nama_kategori'];?></option>

                                          <?php endforeach ?>
                                        </select>
                                        
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">Nama Media</label>
                                      <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nama_media" id="nama_media" required>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">Stock</label>
                                      <div class="col-sm-8">
                                        <input type="number" class="form-control" name="stok" id="stok" required>
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label  class="col-sm-4 col-form-label">Harga</label>
                                      <div class="col-sm-8">
                                        <input type="text" class="form-control" name="harga" id="harga" required>
                                      </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary" name="tambahmedia" >Tambah Data !</button>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                      </div>

<!-- Akhir Modal TAMBAH -->



<!-- Modal UBAH MEDIA -->

<?php $no = 0;
foreach ($datatampil as $row ) : $no++ ;
?>
                      <div class="modal fade editmedia<?php echo $row['id_media'];?>"  tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1>Edit Data Media Cetak</h1>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body" align="left">
                                  <form action="" method="post">
                                    <input type="hidden" name="id_media" required value="<?php echo $row['id_media'];?>">
                                  <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">Jenis Media</label>
                                      <div class="col-sm-8">
                                        <select class="custom-select" name="id_kategori" required>
                                          <option selected value="<?php echo $row['id_kategori'];?>" required="" ><?php echo $row['nama_kategori'];?></option>
                                          <option disabled value="">---- Pilih Kategori Media cetak ----</option>
                                          <?php 
                                          $tampilKategori = tampilKategori ("SELECT * FROM kategori_cetak ");
                                            foreach ($tampilKategori as $data ) : $no++ ;
                                          ?>

                                          <option  value="<?php echo $data['id_kategori'];?>" required="" ><?php echo $data['nama_kategori'];?></option>

                                          <?php endforeach ?>
                                        </select>
                                        
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">Nama Media</label>
                                      <div class="col-sm-8">
                                        <input type="text" class="form-control" name="nama_media" id="nama_media" required value="<?php echo $row['nama_media'];?>">
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label class="col-sm-4 col-form-label">Stock</label>
                                      <div class="col-sm-8">
                                        <input type="number" class="form-control" name="stok" id="stok" required value="<?php echo $row['stok'];?>">
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label  class="col-sm-4 col-form-label">Harga</label>
                                      <div class="col-sm-8">
                                        <input type="text" class="form-control" name="harga" id="harga" required value="<?php echo $row['harga'];?>">
                                      </div>
                                  </div>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary" name="editmedia" >Simpan Data !</button>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                      </div>

<?php endforeach ?>

<!-- akhir Modal UBAH MEDIA -->


