<?php
require_once "dbh.inc.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($email) || empty($username) || empty($password)){
        header("Location: ../index.php?emptyinput=1");
        exit();
    }
    else{
        $stmt = "SELECT * FROM users WHERE username='$username'";
        $res = mysqli_query($conn, $stmt);

            if(mysqli_num_rows($res) > 0){
                header("Location: ../index.php?existinguser=1");
                exit();
            }
            else{
                $hashedpwd = password_hash($password, PASSWORD_DEFAULT);

                $stmt = "INSERT INTO users(email, username, password)
                VALUES('$email', '$username', '$hashedpwd')";
                mysqli_query($conn, $stmt);
                header("Location: ../login.php?signup=succes");
                exit();
            }
    }

}
else{
    header("Location: ../index.php");
}