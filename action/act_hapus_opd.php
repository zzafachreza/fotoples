<?php

require 'functions.php';


$id_opd = $_GET ["id_opd"];



if (hapusopd ($id_opd) > 0)
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