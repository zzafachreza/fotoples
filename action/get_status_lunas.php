 <?php

 include 'koneksi.php';

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
        ON (`media_cetak`.`id_kategori` = `kategori_cetak`.`id_kategori`) WHERE status_transaksi='SELESAI' GROUP BY transaksi_bayar.inv; ");



?>



 <div id="table" class="table-responsive" style="height: 300px;">
                        <table id="datamedia_transaksi" class="table align-items-center table-flush">
                              <thead class="thead-light">
                            <tr>
                              <th scope="col" class="sort">No</th>
                              <th scope="col" class="sort">KODE TRANSAKSI</th>
                               <th scope="col" class="sort">STATUS TRANSAKSI</th>

                             <th scope="col" class="sort">NAMA PELANGGAN</th>
                        <!--       <th scope="col" class="sort">TELEPON PELANGGAN</th>
                              <th scope="col" class="sort">EMAIL PELANGGAN</th> -->
                              <th scope="col" class="sort">TOTAL</th>
                              <th scope="col" class="sort">BAYAR</th>
                             <!--  <th scope="col" class="sort">SISA</th>
                              <th scope="col" class="sort">STATUS BAYAR</th>
                              <th scope="col" class="sort">TANGGAL BAYAR</th>
 -->
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
                                <td><?php echo $tampil['status_transaksi'] ?></td>
                             <td><?php echo $tampil['nama_pelanggan'] ?></td>
                        <!--       <td><?php echo $tampil['telpon_pelanggan'] ?></td>
                              <td><?php echo $tampil['email_pelanggan'] ?></td>  -->
                              <td><?php echo number_format($tampil['total']) ?></td>
                              <td><?php echo number_format($tampil['bayar']) ?>

                                <form id="formlunas<?php echo $tampil['inv'] ?>" onsubmit="editBayar('<?php echo $tampil['inv'] ?>');return false" style="display: none">
                                        <input type="hidden" name="inv" class="form-control" value="<?php echo $tampil['inv'] ?>">
                                        <input type="hidden" name="total" class="form-control" value="<?php echo $tampil['total'] ?>">
                                        <div class="form-group">
                                          <label>Tanggal Bayar</label>
                                          <input type="text" name="tanggal_bayar" class="tgl form-control" value="<?php echo date('Y-m-d') ?>">                
                                        </div>
                                         <div class="form-group">
                                          <label>Bayar</label>
                                           <input id="bayarlunas<?php echo $tampil['inv'] ?>" type="" name="bayar" class="form-control" autocomplete="off" autofocus="autofocus" style="width: 400px">              
                                        </div>

                                        <div class="form-group">
                                          <label>Status Transaksi</label>
                                          <select name="status_transaksi" class="form-control" required="required">
                                            <option></option>
                                            <option <?php  echo $tampil['status_transaksi']==='OPEN'?'selected="selected"':''  ?> >OPEN</option>
                                            <option <?php  echo $tampil['status_transaksi']==='MENUNGGU'?'selected="selected"':''  ?> >MENUNGGU</option>
                                            <option <?php  echo $tampil['status_transaksi']==='PROSES'?'selected="selected"':''  ?> >PROSES</option>
                                            <option <?php  echo $tampil['status_transaksi']==='SELESAI'?'selected="selected"':''  ?> >SELESAI</option>
                                          </select>
                                                 
                                        </div>
                                       
                                        <div class="form-group">
                                          <button class="btn btn-success" type="submit" style="width: 400px">OK</button>
                                        </div>
                                          
                                </form>
                              </td>
                              <!-- <td><?php echo number_format($tampil['kembalian']) ?></td>
                              <td><?php echo $tampil['status_bayar'] ?></td>
                              <td><?php echo $tampil['tanggal_bayar'] ?></td> -->

                              <td> <button data-pelanggan="<?php echo $tampil['id_pelanggan'] ?>" data-id="<?php echo $tampil['inv'] ?>" class="editlunas btn btn-primary" data-toggle="tooltip" data-placement="top" title="edit" ><i class="fa fa-pencil-alt"></i></button>
                              <a target="_BLANK" href="print.php?inv=<?php echo $tampil['inv']  ?>" style="color: #FFF" class="edit btn btn-danger" data-toggle="tooltip" data-placement="top" title="print" ><i class="fa fa-print"></i> Print</a></td>
                            </tr>


                          <?php $no++;} ?>
                          </tbody>
                        </table>
                        </div>


                        <script type="text/javascript">
                          
                                    function editBayar(x){
                                      var data =  $("#formlunas"+x).serialize();
                                      // alert(data);
                                       $.ajax({
                                        url:'action/edit_bayar.php',
                                        type:'POST',
                                        data:data,
                                        success:function(data){

                                           $.ajax({
                                            url:'action/get_status_lunas.php',
                                            success:function(data){
                                              location.href='home.php?open=lunas'
                                            }
                                          })
                                          
                                        }
                                      })
                                    }

                                      $(".editlunas").click(function(e){
                                      e.preventDefault();
                                      var inv = $(this).attr("data-id");
                                      $("#formlunas"+inv).slideToggle();
                                      $("#bayarlunas"+inv).focus();


                                      
                                    })
                                                          </script>