

<?php

require 'functions.php';


$id_pelanggan = $_GET ["id_pelanggan"];



if (hapuspelanggan ($id_pelanggan) > 0)
	{
        echo "<meta http-equiv='refresh' content='1'>";
    }

else
	{
		echo "<meta http-equiv='refresh' content='0'>";
    exit;	
	}



?>