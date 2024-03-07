<?php
// Include the database connection file
require_once("dbh.inc.php");

if(isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = $_POST['id'];
	$name = $_POST['nev'];
	$telszam =  $_POST['telszam'];
	$email = $_POST['email'];	
    $lakcim = $_POST['lakcim'];

		$query = "UPDATE `onkentesek` SET `nev`='$name',`email`='$email',`telefonszam`='$telszam',`lakcim`='$lakcim' WHERE id = '$id' ";
		$query_run = mysqli_query($conn, $query);

		if($query_run)
		{
			header("location:../onkentes.php");
		}
		else
		{
			echo '<script> alert("Nem sikerült megváltoztatni az adatokat!"); </script>';
		}
	}