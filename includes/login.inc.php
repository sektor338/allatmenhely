<?php
require_once 'dbh.inc.php';
require_once 'config_session.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username) || empty([$password])){
        header("Location: ../login.php");
    }
    else {
        $stmt = "SELECT * FROM users WHERE username='$username'";
        $res = mysqli_query($conn, $stmt);
        if(mysqli_num_rows($res) == 0) {
            header("Location: ../login.php");
            exit();
        }
         else {
            while($row = mysqli_fetch_assoc($res)) {
                if (password_verify($password, $row['password'])) {
                    $_SESSION["username"] = $username;
                    header("Location: ../fooldal.php?loginsuccess=1");
                } else {
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                }
            }
         }
    }
}else {
    header("Location: ../login.php");
}



?>