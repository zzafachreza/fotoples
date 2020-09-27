<?php
//KONEKSI
include 'koneksi.php';
// $id_pelanggan = $_GET['id_pelanggan'];

 $sql = mysqli_query ($conn, "INSERT INTO `transaksi`
            (
             `tanggal`,
             `id_pelanggan`,
             `id_media`,
             `harga`,
             `qty`,
             `subtotal`,
             `keterangan`,
             `status_transaksi`)
VALUES (
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