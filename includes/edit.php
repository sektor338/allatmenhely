<?php
// Include the database connection file
require_once("dbh.inc.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
$id = $_POST['id'];
	$name = mysqli_real_escape_string($conn, $_POST['nev']);
	$telszam = mysqli_real_escape_string($conn, $_POST['telszam']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);	
    $lakcim = mysqli_real_escape_string($conn, $_POST['lakcim']);
	
	// Check for empty fields
	if (empty($name) || empty($telszam) || empty($email) || empty($lakcim)) {
		if (empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if (empty($telszam)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if (empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
        if (empty($lakcim)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
	} else {
		// Update the database table
		$result = mysqli_query($conn, "UPDATE onkentesek SET `nev` = '$name',`email` = '$email', `telszam` = '$telszam', `lakcim` = '$lakcim' WHERE `id` = $id");
		
		// Display success message
		echo "<p><font color='green'>Data updated successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}