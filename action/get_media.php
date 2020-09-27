<?php
//KONEKSI
include 'koneksi.php';
$id_media = $_GET['id_media'];

$sql = mysqli_query ($conn, "SELECT * FROM media_cetak WHERE id_media = $id_media" );
$tampil = mysqli_fetch_array ($sql);
$data = array(
			'harga' => $tampil['harga'],
			);
echo json_encode($data);

?>