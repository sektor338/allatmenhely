<?php 




if($_SERVER['REQUEST_METHOD'] == 'POST'){
 
 /**
 * This function checks if a phone number is a valid Hungarian number and removes the double 00 prefix if present.
 *
 * @param string $number The phone number to be checked
 * @return string|bool Returns the valid Hungarian phone number without the double 00 prefix, or false if the number is invalid
 */
$number = 0;
    require_once("./includes/dbh.inc.php");
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $number = $_POST['phone'];
    $lakcim = $_POST['lakcim'];
    $megjegyzes = $_POST['megjegyzes'];
    // Remove any spaces or dashes from the number
    $number = str_replace(array(' ', '-'), '', $number);
   
    // Check if the number starts with 00
    if (substr($number, 0, 2) == '00') {
        // Remove the double 00 prefix
        $number = substr($number, 2);
    }
   
    // Check if the number is a valid Hungarian phone number
    if (preg_match('/^(?:\+36|06)(?:20|30|31|70)[\d]{7}$/', $number)) {
        // Return the valid Hungarian phone number
        if(empty($name) || empty($email) || empty($number) || empty($lakcim)) {
            header("Location: volunteer.php?=emptyinput=1");
        
        } else {
            $stmt = "INSERT INTO `onkentesek`(`nev`, `email`, `telefonszam`, `lakcim`, `egyeb`) VALUES ('$name','$email','$number','$lakcim','$megjegyzes')";
            mysqli_query($conn, $stmt);
            header("Location: volunteer.php?=success");
        }
    } else {
        // Return false if the number is invalid
        header("Location: volunteer.php?=phone=false ");
    }
}
