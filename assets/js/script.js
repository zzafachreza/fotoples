// ambil element

var cari = document.getElementById('cari');
var carimedia = document.getElementById('carimedia');
var table = document.getElementById('table');

//tambah event
cari.addEventListener ('keyup', function (){


// buat object
	var xhr = new XMLHttpRequest ();

// cek Kesiapan
	xhr.onreadystatechange = function (){
		if(xhr.readyState == 4 && xhr.status == 200 ) {
				table.innerHTML = xhr.responseText;
		}
	}

	xhr.open ('GET' , 'ajax/mediacetak.php?cari=' + cari.value , true);
	xhr.send();


});

