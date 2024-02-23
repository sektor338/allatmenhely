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
$dbname = "s24_allatmenhely";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM `users`";

$res = mysqli_query($conn, $sql);





?>
