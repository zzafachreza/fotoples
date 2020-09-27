<?php
//KONEKSI
include 'koneksi.php';
// $id_pelanggan = $_GET['id_pelanggan'];

// print_r($_POST);

$total = $_POST['total'];
$bayar = $_POST['bayar'];
$kembalian = $_POST['kembalian'];
$id_pelanggan  =$_POST['id_pelanggan'];
$inv = "INV-".date('ymdhis');

if($bayar==0 OR $bayar != $total){
    $status_bayar='BELUM LUNAS';
    $tanggal_bayar='';
}else{
    $status_bayar='LUNAS';
       $tanggal_bayar=date('Y-m-d');
}


 $sql = mysqli_query ($conn, "INSERT INTO `transaksi_bayar`
            (
             `inv`,
             `total`,
             `bayar`,
             `kembalian`,`status_bayar`,`tanggal_bayar`)
VALUES ('$inv',
        '$total',
        '$bayar',
        '$kembalian','$status_bayar','$tanggal_bayar');" );


 $sql2 = mysqli_query ($conn, "UPDATE transaksi SET inv='$inv', status_transaksi='MENUNGGU' WHERE id_pelanggan='$id_pelanggan' AND status_transaksi='OPEN'");


?>