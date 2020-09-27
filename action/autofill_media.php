<?php
//KONEKSI
require 'functions.php';

$nama_media = $_GET['nama_media'];

$sql = mysqli_query ($conn, "SELECT * FROM media_cetak WHERE nama_media = '$nama_media'" );
$tampil = mysqli_fetch_array ($sql);
$data = array(
			'harga' => $tampil['harga']
			);
echo json_encode($data);

?>