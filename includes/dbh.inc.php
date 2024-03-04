<?php
/*
$servername = "";
$username = "";
$password = "";
$dbname = "";
*/
include_once 'env.php';
$servername = $szervernev;
$username = $felhasznalonev;
$password = $jelszo;
$dbname = "s24_allatmenhely";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM `users`";

$res = mysqli_query($conn, $sql);





?>
