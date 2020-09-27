<?php

require 'functions.php';


$id_kasir = $_GET ["id_kasir"];



if (hapuskasir ($id_kasir) > 0)
	{
		
		echo "<meta http-equiv='refresh' content='0'>";
    exit;
	}

else
	{
		echo "<meta http-equiv='refresh' content='0'>";
    exit;	
	}



?>