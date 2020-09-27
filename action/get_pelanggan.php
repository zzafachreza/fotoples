<?php
//KONEKSI
include 'koneksi.php';
$id_pelanggan = $_GET['id_pelanggan'];

$sql = mysqli_query ($conn, "SELECT * FROM pelanggan WHERE id_pelanggan = '$id_pelanggan'" );
$tampil = mysqli_fetch_array ($sql);
$data = array(
			'telpon_pelanggan' => $tampil['telpon_pelanggan'],
			'email_pelanggan' => $tampil['email_pelanggan']
			);
echo json_encode($data);

?>