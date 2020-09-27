

        <?php
//KONEKSI
$conn = mysqli_connect ("localhost", "root", "" , "fotoples");

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
 <div id="table" class="table-responsive">
<table class="table align-items-center table-flush">
	    <thead class="thead-light">
		<tr>
			<th>No</th>
			<th>KODE TRANSAKSI</th>
		<!-- 	<th>NAMA PELANGGAN</th>
			<th>TELEPON PELANGGAN</th>
			<th>EMAIL PELANGGAN</th> -->
			<th>KATEGORi</th>
			<th>MEDIA</th>
			<th>HARGA</th>
			<th>QTY</th>
			<th>SUBTOTAL</th>
			<th>KETERANGAN</th>
		</tr>
	</thead>
	<tbody>
		<?php

		$no=1;

			while ($tampil = mysqli_fetch_array ($sql)) {
				# code...
			
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
		</tr>


	<?php $no++;} ?>
	</tbody>
</table>
</div>