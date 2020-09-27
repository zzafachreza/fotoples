<?php
//KONEKSI
$conn = mysqli_connect ("localhost", "root", "" , "fotoples");
// $id_pelanggan = $_GET['id_pelanggan'];
	print_r($_GET);

	$id_transaksi = "INV-".date('ymdhis');

echo $sql = mysqli_query ($conn, "INSERT INTO `fotoples`.`transaksi`
            (`id_transaksi`,
             `tanggal`,
             `id_pelanggan`,
             `id_media`,
             `harga`,
             `qty`,
             `subtotal`,
             `keterangan`,
             `status_transaksi`)
VALUES ('$id_transaksi',
        NOW(),
        '".$_GET['id_pelanggan']."',
        '".$_GET['media']."',
        '".$_GET['harga']."',
        '".$_GET['qty']."',
        '".$_GET['subtotal']."',
        '".$_GET['keterangan']."',
        'OPEN');" );
// $tampil = mysqli_fetch_array ($sql);
// $data = array(
// 			'telpon_pelanggan' => $tampil['telpon_pelanggan'],
// 			'email_pelanggan' => $tampil['email_pelanggan']
// 			);
// echo json_encode($data);

?>