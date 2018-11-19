<?php

$server = "localhost";
$login = "root";
$pass = "";
$db = "books";

$connect = mysqli_connect($server, $login, $pass,$db );
mysqli_set_charset($connect, “utf8”);
 ?>