<?php
include 'koneksi.php';

// print_r($_POST);

$id_transaksi = $_POST['id_transaksi'];

 $sql = mysqli_query ($conn, "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'");