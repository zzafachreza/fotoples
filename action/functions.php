<script src ="assets/js/sweetalert2.all.min.js"></script>
<script src="assets/js/jquery-3.5.1.min.js"></script>

<?php
//Koneksi
$conn = mysqli_connect ("localhost", "root", "" , "bikinap2_fotoples");








//FUNGSI FORM MEDIA CETAK

//tambah DATA MEDIA CETAK

function tambahmedia ($data)
{
	global $conn;
	
	$id_kategori = htmlspecialchars ($data["id_kategori"]);
	$nama_media = htmlspecialchars ($data["nama_media"]);
	$stok = htmlspecialchars ($data["stok"]);
	$harga = htmlspecialchars ($data["harga"]);


	
	// Simpan data
	$query = "INSERT INTO media_cetak
			VALUES
			('','$id_kategori','$nama_media','$stok','$harga')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows ($conn);


}


// Hapus DATA MEDIA CETAK

function hapusmedia ($id_media)
{
	global $conn;
	mysqli_query ($conn, "DELETE FROM media_cetak WHERE id_media = $id_media ");
	return mysqli_affected_rows ($conn);
}

// TAMPIL MEDIA CETAK

function tampilmedia ($tampilmedia)
{

	global $conn;
	//AMBIL DATA
	$result = mysqli_query ($conn, $tampilmedia);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) 
			{
				$rows[] = $row;
			}
			return $rows;

	// AMBIL DATA FETCH
	// mysqli_fetch_row // Mengembalikan Array Numerik
	// mysqli_fetch_assoc // Mengembalikan Array Assosiatif
	// mysqli_fetch_array // Mengembalikan array keduanya
	// mysqli_fetch_object //

}


function editmedia ($editdata)
{
	global $conn;
	$id_media = $editdata["id_media"];
	$id_kategori = htmlspecialchars ($editdata["id_kategori"]);
	$nama_media = htmlspecialchars ($editdata["nama_media"]);
	$stok = htmlspecialchars ($editdata["stok"]);
	$harga = htmlspecialchars ($editdata["harga"]);

	$query = "UPDATE media_cetak SET 
	id_kategori = '$id_kategori',
	nama_media = '$nama_media',
	stok = '$stok',
	harga = '$harga'

	WHERE id_media = $id_media;
	
	";


	mysqli_query($conn, $query);

	return mysqli_affected_rows ($conn);


}




// FROM OPERATOR DESESAIN

// TAMPIL OPD

function tampilopd ($tampilopd)
{

	global $conn;
	//AMBIL DATA
	$result = mysqli_query ($conn, $tampilopd);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) 
			{
				$rows[] = $row;
			}
			return $rows;

	// AMBIL DATA FETCH
	// mysqli_fetch_row // Mengembalikan Array Numerik
	// mysqli_fetch_assoc // Mengembalikan Array Assosiatif
	// mysqli_fetch_array // Mengembalikan array keduanya
	// mysqli_fetch_object //

}


//TAMBAH OPERATOR DESAIN

function tambahopd ($tambah_opd)
{
	global $conn;
	
	$nama_opd = htmlspecialchars ($tambah_opd["nama_opd"]);
	$username = strtolower (stripcslashes ($tambah_opd["username"]));
	$password = mysqli_real_escape_string ($conn, $tambah_opd["password"]);
	$pass 	= mysqli_real_escape_string ($conn, $tambah_opd["pass"]);
	$email_opd = htmlspecialchars ($tambah_opd["email_opd"]);
	$telpon_opd = htmlspecialchars ($tambah_opd["telpon_opd"]);

	//cek username
	$result = mysqli_query ($conn, "SELECT username FROM operator_desain WHERE username = '$username'");

	if(mysqli_fetch_assoc($result))
	{
		echo "
		<script type='text/javascript'>
		 Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: 'error',
                    text: 'Username Sudah Digunakan',
                    showConfirmButton: true,
                    confirmButtonColor : '#d33',
                    timer: 3500
                   })
		</script>


		";

		return false;
			
	}

	// konfirmasi password
	if ($password !== $pass) 
	{
		echo "
		<script type='text/javascript'>
		 Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: 'error',
                    text: 'Konfirmasi Pasword tidak Sesuai',
                    showConfirmButton: true,
                    confirmButtonColor : '#d33',
                    timer: 3500
                   })
		</script>

		";

		return false;
	}

	
	// Simpan data
	$query = "INSERT INTO operator_desain
			VALUES
			('','$nama_opd','$username','$password','$email_opd','$telpon_opd')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows ($conn);


}

// HAPUS OPERATOR DESAIN

function hapusopd ($id_opd)
{
	global $conn;
	mysqli_query ($conn, "DELETE FROM operator_desain WHERE id_opd = $id_opd ");
	return mysqli_affected_rows ($conn);
}
// EDIT OPERATOR DESAIN

function editDataOpd ($editdata)
{
	global $conn;
	$id_opd = $editdata["id_opd"];
	$nama_opd = htmlspecialchars ($editdata["nama_opd"]);
	$username = htmlspecialchars ($editdata["username"]);
	$password = htmlspecialchars ($editdata["password"]);
	$pass = htmlspecialchars ($editdata["pass"]);
	$email_opd = htmlspecialchars ($editdata["email_opd"]);
	$telpon_opd = htmlspecialchars ($editdata["telpon_opd"]);

	$query = "UPDATE operator_desain SET 

	nama_opd = '$nama_opd',
	email_opd = '$email_opd',
	telpon_opd = '$telpon_opd'

	WHERE id_opd = $id_opd;
	
	";


	mysqli_query($conn, $query);

	return mysqli_affected_rows ($conn);


}









// FROM KASIR

// TAMPIL KASIR

function tampilkasir ($tampilkasir)
{

	global $conn;
	//AMBIL DATA
	$result = mysqli_query ($conn, $tampilkasir);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) 
			{
				$rows[] = $row;
			}
			return $rows;

	// AMBIL DATA FETCH
	// mysqli_fetch_row // Mengembalikan Array Numerik
	// mysqli_fetch_assoc // Mengembalikan Array Assosiatif
	// mysqli_fetch_array // Mengembalikan array keduanya
	// mysqli_fetch_object //

}


//Tambah KASIR

function tambahkasir ($tambah_kasir)
{
	global $conn;
	
	$nama_kasir = htmlspecialchars ($tambah_kasir["nama_kasir"]);
	$username = strtolower (stripcslashes ($tambah_kasir["username"]));
	$password = mysqli_real_escape_string ($conn, $tambah_kasir["password"]);
	$pass 	= mysqli_real_escape_string ($conn, $tambah_kasir["pass"]);
	$email_kasir = htmlspecialchars ($tambah_kasir["email_kasir"]);
	$telpon_kasir = htmlspecialchars ($tambah_kasir["telpon_kasir"]);

	//cek username
	$result = mysqli_query ($conn, "SELECT username FROM kasir WHERE username = '$username'");

	if(mysqli_fetch_assoc($result))
	{
		echo "
		<script type='text/javascript'>
		 Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: 'error',
                    text: 'Username Sudah Digunakan',
                    showConfirmButton: true,
                    confirmButtonColor : '#d33',
                    timer: 3500
                   })
		</script>

		";

		return false;
			
	}

	// konfirmasi password
	if ($password !== $pass) 
	{
		echo "
		<script type='text/javascript'>
		 Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: 'error',
                    text: 'Konfirmasi Pasword tidak Sesuai',
                    showConfirmButton: true,
                    confirmButtonColor : '#d33',
                    timer: 3500
                   })
		</script>

		";

		return false;
	}

	
	// Simpan data
	$query = "INSERT INTO kasir
			VALUES
			('','$nama_kasir','$username','$password','$email_kasir','$telpon_kasir')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows ($conn);


}


// HAPUS OPERATOR KASIR

function hapuskasir ($id_kasir)
{
	global $conn;
	mysqli_query ($conn, "DELETE FROM kasir WHERE id_kasir = $id_kasir ");
	return mysqli_affected_rows ($conn);
}



// EDIT DATA KASIR

function editDataKasir ($editdata)
{
	global $conn;
	$id_kasir = $editdata["id_kasir"];
	$nama_kasir = htmlspecialchars ($editdata["nama_kasir"]);
	$username = htmlspecialchars ($editdata["username"]);
	$password = htmlspecialchars ($editdata["password"]);
	$pass = htmlspecialchars ($editdata["pass"]);
	$email_kasir = htmlspecialchars ($editdata["email_kasir"]);
	$telpon_kasir = htmlspecialchars ($editdata["telpon_kasir"]);

	$query = "UPDATE kasir SET 

	nama_kasir = '$nama_kasir',
	email_kasir = '$email_kasir',
	telpon_kasir = '$telpon_kasir'

	WHERE id_kasir = $id_kasir;
	
	";


	mysqli_query($conn, $query);

	return mysqli_affected_rows ($conn);


}



// TAMPIL PELANGGAN

function tampilpelanggan ($tampilpelanggan)
{

	global $conn;
	//AMBIL DATA
	$result = mysqli_query ($conn, $tampilpelanggan);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) 
			{
				$rows[] = $row;
			}
			return $rows;

	// AMBIL DATA FETCH
	// mysqli_fetch_row // Mengembalikan Array Numerik
	// mysqli_fetch_assoc // Mengembalikan Array Assosiatif
	// mysqli_fetch_array // Mengembalikan array keduanya
	// mysqli_fetch_object //

}


//Tambah PELANGGAN

function tambahPelanggan ($tambahPelanggan)
{
	global $conn;
	
	$nama_pelanggan = htmlspecialchars ($tambahPelanggan["nama_pelanggan"]);
	$telpon_pelanggan = htmlspecialchars ($tambahPelanggan["telpon_pelanggan"]);
	$email_pelanggan = htmlspecialchars ($tambahPelanggan["email_pelanggan"]);

	//cek Telpon
	$result = mysqli_query ($conn, "SELECT telpon_pelanggan FROM pelanggan WHERE telpon_pelanggan = '$telpon_pelanggan'");

	if(mysqli_fetch_assoc($result))
	{
		echo "
		<script type='text/javascript'>
		 Swal.fire({
                    position: 'top-center',
                    icon: 'error',
                    title: 'error',
                    text: 'DATA yang dimasukan sudah Tertera, Silahkan Periksa Kembali',
                    showConfirmButton: true,
                    confirmButtonColor : '#d33',
                    timer: 3500
                   })
		</script>

		";

		return false;
			
	}

	
	// Simpan data
	$query = "INSERT INTO pelanggan
			VALUES
			('','$telpon_pelanggan','$nama_pelanggan','$email_pelanggan')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows ($conn);


}


// HAPUS PELANGGAN

function hapuspelanggan ($id_pelanggan)
{
	global $conn;
	mysqli_query ($conn, "DELETE FROM pelanggan WHERE id_pelanggan = $id_pelanggan ");
	return mysqli_affected_rows ($conn);
}


// EDIT DATA PELANGGAN

function editPelanggan ($editdata)
{
	global $conn;
	$id_pelanggan = $editdata["id_pelanggan"];
	$nama_pelanggan = htmlspecialchars ($editdata["nama_pelanggan"]);
	$email_pelanggan = htmlspecialchars ($editdata["email_pelanggan"]);
	$telpon_pelanggan = htmlspecialchars ($editdata["telpon_pelanggan"]);

	//cek TELPON
	// $result = mysqli_query ($conn, "SELECT telpon_pelanggan FROM pelanggan WHERE telpon_pelanggan = '$telpon_pelanggan'");

	// if(mysqli_fetch_assoc($result))
	// {
	// 	echo "
	// 	<script type='text/javascript'>
	// 	 Swal.fire({
 //                    position: 'top-center',
 //                    icon: 'error',
 //                    title: 'error',
 //                    text: 'DATA yang dimasukan sudah Tertera, Silahkan Periksa Kembali',
 //                    showConfirmButton: true,
 //                    confirmButtonColor : '#d33',
 //                    timer: 3500
 //                   })
	// 	</script>

	// 	";

	// 	return false;
			
	// }

	$query = "UPDATE pelanggan SET 

	id_pelanggan = '$id_pelanggan',
	nama_pelanggan = '$nama_pelanggan',
	email_pelanggan = '$email_pelanggan',
	telpon_pelanggan = '$telpon_pelanggan'

	WHERE id_pelanggan = $id_pelanggan;
	
	";


	mysqli_query($conn, $query);

	return mysqli_affected_rows ($conn);


}


// CARI Pelanggan

function cariPelanggan ($keyword)

{
	$query = " SELECT * FROM pelanggan
	
	WHERE
	nama_pelanggan LIKE '%$keyword%' OR
	telpon_pelanggan LIKE '%$keyword%' OR
	email_pelanggan LIKE '%$keyword%'";

	return tampilpelanggan ($query);
}


// TAMPIL KATEGORI CETAK

function tampilKategori ($tampilKategori)
{

	global $conn;
	//AMBIL DATA
	$result = mysqli_query ($conn, $tampilKategori);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) 
			{
				$rows[] = $row;
			}
			return $rows;

	// AMBIL DATA FETCH
	// mysqli_fetch_row // Mengembalikan Array Numerik
	// mysqli_fetch_assoc // Mengembalikan Array Assosiatif
	// mysqli_fetch_array // Mengembalikan array keduanya
	// mysqli_fetch_object //

}

?>