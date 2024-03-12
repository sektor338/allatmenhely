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

	$stmt = $conn->prepare("UPDATE `onkentesek` SET `nev`=?,`email`=?,`telefonszam`=?,`lakcim`=? WHERE id = ? ");
	$stmt->bind_param("sssss", $name,$email,$telszam,$lakcim,$id);
		if($stmt->execute())
		{$stmt->close();
			header("location:../onkentes.php");
		}
		else
		{
			echo '<script> alert("Nem sikerült megváltoztatni az adatokat!"); </script>';
		}
	}