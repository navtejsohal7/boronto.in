<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'ssggssch_admin');
define('DB_PASSWORD', 'dashmesh');
define('DB_DATABASE', 'ssggssch_boronto');
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die(mysqli_error());
?>
