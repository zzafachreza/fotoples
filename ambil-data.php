<?php
//KONEKSI
require 'action/functions.php';



if (isset($_POST['kategori'])) {
    $kategori = $_POST["kategori"];

    $sql = mysqli_query ($conn, "SELECT * FROM media_cetak WHERE id_kategori = $kategori" );
    ?>

       <option>...</option>


       <?php
    while ($data = mysqli_fetch_array($sql)) {
        ?>
     
        <option value="<?php echo  $data['id_media']; ?>"><?php echo $data['nama_media']; ?></option>
        <?php
    }
}




?>