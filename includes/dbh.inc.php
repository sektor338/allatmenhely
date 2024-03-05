<?php

/*
$servername = "";
$username = "";
$password = "";
$dbname = "";
*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adatbazis";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM `onkentesek`";

$res = mysqli_query($conn, $sql);





?>
