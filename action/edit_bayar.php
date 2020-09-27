<?php
//KONEKSI
include 'koneksi.php';
// $id_pelanggan = $_GET['id_pelanggan'];

 print_r($_POST);
$inv = $_POST['inv'];
$total = $_POST['total'];
$bayar = $_POST['bayar'];
$tanggal_bayar = $_POST['tanggal_bayar'];
$status_transaksi = $_POST['status_transaksi'];

if($bayar==0 OR $bayar != $total){
    $status_bayar='BELUM LUNAS';
    $tanggal_bayar='';
}else{
    $status_bayar='LUNAS';
}

$kembalian = $total - $bayar;

 $sql = mysqli_query ($conn, "UPDATE transaksi_bayar SET bayar='$bayar',kembalian='$kembalian', status_bayar='$status_bayar',tanggal_bayar='$tanggal_bayar' WHERE inv='$inv'");

  $sql2 = mysqli_query ($conn, "UPDATE transaksi SET status_transaksi='$status_transaksi' WHERE inv='$inv'");


?>