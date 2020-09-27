<?php
session_start();
session_unset();
session_destroy();
$_SESSION = [];


echo "<meta http-equiv='refresh' content='0 url=../login.php'>";



?>