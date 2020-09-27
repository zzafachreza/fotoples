<?php
	include 'action/koneksi.php';
	session_start();
	// print_r($_SESSION);
	$inv = $_GET['inv'];

	$sqlHD = mysqli_query ($conn, "SELECT *
FROM
    `transaksi_bayar`
    INNER JOIN `transaksi` 
        ON (`transaksi_bayar`.`inv` = `transaksi`.`inv`)
    INNER JOIN `media_cetak` 
        ON (`transaksi`.`id_media` = `media_cetak`.`id_media`)
    INNER JOIN `pelanggan` 
        ON (`transaksi`.`id_pelanggan` = `pelanggan`.`id_pelanggan`)
    INNER JOIN `kategori_cetak` 
        ON (`media_cetak`.`id_kategori` = `kategori_cetak`.`id_kategori`) WHERE transaksi_bayar.inv='$inv' GROUP BY transaksi_bayar.inv; ");
$tampilHD = mysqli_fetch_array ($sqlHD);


	$sqlDT = mysqli_query ($conn, "SELECT *
FROM
    `transaksi_bayar`
    INNER JOIN `transaksi` 
        ON (`transaksi_bayar`.`inv` = `transaksi`.`inv`)
    INNER JOIN `media_cetak` 
        ON (`transaksi`.`id_media` = `media_cetak`.`id_media`)
    INNER JOIN `pelanggan` 
        ON (`transaksi`.`id_pelanggan` = `pelanggan`.`id_pelanggan`)
    INNER JOIN `kategori_cetak` 
        ON (`media_cetak`.`id_kategori` = `kategori_cetak`.`id_kategori`) WHERE transaksi.inv='$inv'");

?>

<style>

page {
  background: white;
  display: block;
  margin: 0 auto;
  /*overflow:hidden;*/
  letter-spacing: 1px;
  line-height:20px;

}
page[size="B5"] {  
  width: 10.75cm;
  height: 100%; 
}

@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
  
  tr.highlight {
    border-top: 10px solid;
    border-bottom: 10px solid;
    border-color: transparent;
}
}

tr.highlight {
    border-top: 10px solid;
    border-bottom: 10px solid;
    border-color: transparent;
}


</style>

<body  onLoad="window.print()">
	<page size="B5">
    <center>
        <p>Welcome to</p>
         <table width="80%" border="0">
                <tr>
                    <td colspan="3" align="center"> FOTOPLES PRINTING</td>
                </tr>
                <tr>
                    <td colspan="3" align="center">Jl.  Setia budhi No.42 - 46</td>
                </tr>
                <tr>
                    <td colspan="3" align="center">BANDUNG 40141</td>
                </tr>
                <tr>
                    <td align="left" style="padding-lef:2px">Telp</td>
                    <td align="center">:</td>
                    <td align="left">+62-22-203-4325</td>
                </tr>
                 <tr>
                    <td align="left">Fax</td>
                    <td align="center">:</td>
                    <td align="left">+62-22-203-5958</td>
                </tr>
            	
                <tr>
                    <td align="left" style="padding-lef:10px">Receipt#</td>
                    <td align="center">:</td>
                    <td align="left">    <?php echo $inv ?></td>
                </tr>
            </table>

                   <table width="100%" border="0">
                <tr>
                   <td colspan="2">=========================================</td>
                </tr>
                <tr>
                   <td align="left" style="padding:-100px"><?php echo $tampilHD['tanggal'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampilHD['status_transaksi'] ?></td>
                    <td align="center"><?php echo $_SESSION['nama_lengkap'] ?></td>
                </tr>
                <tr>
				<td colspan="2">=========================================</td>                </tr>
			</table>

			  <div style="padding-left:1%;padding-right:1%">
                 <table width="100%" border="0">
               <?php
  
               $jmlQty=0;
               $no=1;
               while ($r = mysqli_fetch_array ($sqlDT)){
                   
                  
                   $jmlQty += $r['qty'];
                   
               
               ?> <tr>
                    <td colspan="4"><?php echo $r['nama_kategori'] ?></td>
                  </tr>
                  <tr>
                    <td><?php echo $r['nama_media'] ?></td>
                    <td><?php echo $r['qty'] ?> X</td>
                     <td align="center"> <?php echo $r['harga'] ?> = </td>
                      <td align="right"><?php echo number_format($r['subtotal']) ?></td>
                  </tr>
                <?php $no++;} ?>
                
            
                 
            </table>
             </div>
              </center>

              <div style="padding-left:7%;padding-right:1%">
                <table width="100%" border="0">
          <tr>
                    <td colspan="3" align="right">============</td>
                </tr>
                    <tr>
                      <td align="left" width="50%"> TOTAL SALES  </td>
                      <td align="left" width="20px">:  </td>
                      <td align="right"> <?php echo number_format($tampilHD['total']) ?>  </td>
                  </tr>
                  
                  
                  
                      </table>
  
     <table width="70%" border="0">
                  <tr>
                      <td align="center"> #Ln: </td>
                   
                      <td  align="center">#Qty:</td>
                      <td align="right"><?php echo $jmlQty ?></td>
                 
                  </tr>
                </table>
                
                <table width="100%" border="0">
                    
            
                    <tr>
                      <td align="left" width="32%"> BAYAR  </td>
                      <td align="left"  width="20px"> :  </td>
                      <td align="right"> <?php echo number_format($tampilHD['bayar']) ?>  </td>
                           <tr>
 
                      
                  </tr>
                  </table>
                  <table width="100%" border="0">
                           <tr>
                    <td colspan="3" align="right">============</td>
                </tr>
                    <tr>
                     <td align="left" width="50%"> TENDER AMOUNT  </td>
                      <td align="left" width="20px"> . . . . :  </td>
                      <td align="right"> <?php echo number_format($tampilHD['bayar']) ?>  </td>
                      <tr>
                          <tr>
                     <td align="center" colspan="2" width="50%">  **** SISA ****  </td>
                      <td align="left"> <?php echo number_format($tampilHD['kembalian']) ?>  </td>
                      <tr>
                     
                      
                  </tr>
            
                  
                      </table>
                      <br/>
                      <h3><?php echo $tampilHD['status_bayar'] ?></h3>
                      <h4><?php echo "DIBAYAR PADA : ".$tampilHD['tanggal_bayar'] ?></h4>
                    
                       PT. SFOTOPLES PRINTING<br/>
                 
           </div>


       </center>
      </page>

	</body>