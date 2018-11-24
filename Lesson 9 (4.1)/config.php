<?php

$server = "localhost";
$login = "elgladchenko";
$pass = "neto1751";
$db = "global";

$connect = mysqli_connect($server, $login, $pass, $db );
mysqli_set_charset($connect, “utf8”);
 ?>