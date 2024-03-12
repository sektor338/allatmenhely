<?php
require_once 'dbh.inc.php';
require_once 'config_session.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(empty($email) || empty([$password])){
        header("Location: ../adminlogin.php");
    }
    else {
        $stmt = "SELECT * FROM users WHERE email='$email'";
        $res = mysqli_query($conn, $stmt);
        if(mysqli_num_rows($res) == 0) {
            header("Location: ../adminlogin.php");
            exit();
        }
         else {
            while($row = mysqli_fetch_assoc($res)) {
                if (password_verify($password, $row['password'])) {
                    $_SESSION["email"] = $email;
                    header("Location: ../admin_panel.php?loginsuccess=1");
                } else {
                    header("Location: ../adminlogin.php?error=wrongpwd");
                    exit();
                }
            }
         }
    }
}else {
    header("Location: ../adminlogin.php");
}
