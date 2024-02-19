<?php 
<<<<<<< HEAD
=======
$servername = "";
$username = "";
$password = "";
$dbname = "";
>>>>>>> 7a35c409dfaebd7c1aa92fdfd61ba71ca7ca521a
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adatbazis";*/
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM `onkentesek`";

$res = mysqli_query($conn, $sql);





?>
