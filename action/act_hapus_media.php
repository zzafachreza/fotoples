
<?php

require 'functions.php';
$id_media = $_GET ["id_media"];



if (hapusmedia ($id_media) > 0)
	{
        echo "<meta http-equiv='refresh' content='1'>";
	}

else
	{
        echo "<meta http-equiv='refresh' content='1'>";
	}

?>