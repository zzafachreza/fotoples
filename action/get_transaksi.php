

        <?php
//KONEKSI
include 'koneksi.php';

// print_r($_GET);

$id_pelanggan = $_GET['id_pelanggan'];

$sql = mysqli_query ($conn, "SELECT *
FROM
    `transaksi`
    INNER JOIN `media_cetak` 
        ON (`transaksi`.`id_media` = `media_cetak`.`id_media`)
    INNER JOIN `pelanggan` 
        ON (`transaksi`.`id_pelanggan` = `pelanggan`.`id_pelanggan`)
    INNER JOIN `kategori_cetak` 
        ON (`media_cetak`.`id_kategori` = `kategori_cetak`.`id_kategori`) WHERE transaksi.id_pelanggan='$id_pelanggan' AND status_transaksi='OPEN';" );

// $data = array(
// 			'telpon_pelanggan' => $tampil['telpon_pelanggan'],
// 			'email_pelanggan' => $tampil['email_pelanggan']
// 			);
// echo json_encode($data);

?>
 <div id="table" class="table-responsive" style="height: 300px;">
<table id="datamedia_transaksi" class="table align-items-center table-flush">
	    <thead class="thead-light">
		<tr>
			<th scope="col" class="sort">No</th>
			<th scope="col" class="sort">KODE TRANSAKSI</th>
		<!-- 	<th>NAMA PELANGGAN</th>
			<th>TELEPON PELANGGAN</th>
			<th>EMAIL PELANGGAN</th> -->
			<th scope="col" class="sort">KATEGORi</th>
			<th scope="col" class="sort">MEDIA</th>
			<th scope="col" class="sort">HARGA</th>
			<th scope="col" class="sort">QTY</th>
			<th scope="col" class="sort">SUBTOTAL</th>
			<th scope="col" class="sort">KETERANGAN</th>
			<th scope="col" class="sort">AKSI</th>
		</tr>
	</thead>
	<tbody class="list">
		<?php

		$no=1;
		$total =0;

			while ($tampil = mysqli_fetch_array ($sql)) {
				# code...

				$total += $tampil['subtotal'];
			
		?>	
		<tr>
			<td><?php echo $no  ?></td>
			<td><?php echo $tampil['id_transaksi'] ?></td> 
<!-- 			<td><?php echo $tampil['nama_pelanggan'] ?></td>
			<td><?php echo $tampil['telpon_pelanggan'] ?></td>
			<td><?php echo $tampil['email_pelanggan'] ?></td> -->
			<td><?php echo $tampil['nama_kategori'] ?></td>
			<td><?php echo $tampil['nama_media'] ?></td>
			<td><?php echo number_format($tampil['harga']) ?></td>
			<td><?php echo number_format($tampil['qty']) ?></td>
			<td><?php echo number_format($tampil['subtotal']) ?></td>
			<td><?php echo $tampil['keterangan'] ?></td>
			<td> <button data-pelanggan="<?php echo $tampil['id_pelanggan'] ?>" data-id="<?php echo $tampil['id_transaksi'] ?>" class="hapus btn btn-warning" data-toggle="tooltip" data-placement="top" title="Hapus" ><i class="fa fa-trash"></i></button></td>
		</tr>


	<?php $no++;} ?>
	</tbody>
</table>

<input type="hidden" id="total" name="total" value="<?php echo number_format($total) ?>">
<input type="hidden" id="total2" name="total" value="<?php echo $total ?>">

</div>


<script type="text/javascript">

	 var total = $("#total").val();
	 var total2 = $("#total2").val();
	 var kembalian = $("#total2").val();
          $(".Htotal").text(total);
          $("#kembalian2").text(kembalian);
            $("#Htotal2").val(total2);


	$(".hapus").click(function(e){
		e.preventDefault();
		var id_transaksi = $(this).attr("data-id");
		var id_pelanggan = $(this).attr("data-pelanggan");
		console.log(id_transaksi);

		 $.ajax({
            url:'action/delete_transaksi.php',
            type:'POST',
            data :{
            	id_transaksi:id_transaksi
            }
            ,success:function(data){
              // var data = JSON.parse(data);
              // console.log(data);
              getDataTransaksi(id_pelanggan);
             
             
            }
          })


	})
</script>