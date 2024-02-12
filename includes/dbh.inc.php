<?php 
$servername = "141.144.224.20";
$username = "u24_WUmZlJHkkX";
$password = "Bw^!77w=Ul8yFIeaxRQP9@Jj";
$dbname = "s24_allatmenhely";
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adatbazis";*/
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM `onkentesek`";

$res = mysqli_query($conn, $sql);





?>