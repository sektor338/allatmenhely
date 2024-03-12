<?php
require_once "dbh.inc.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $cim = filter_var($_POST['cim'], FILTER_UNSAFE_RAW);
    $hir = filter_var($_POST['hir'], FILTER_UNSAFE_RAW);

    if(empty($cim) || empty($hir)){
        header("Location: ../newsupload.php?uresinput=1");
        exit();
    }
    else{
        $stmt = "SELECT * FROM hirek";
        $sql = mysqli_stmt_init($conn);
        $res = mysqli_query($conn, $stmt);
        if(!mysqli_stmt_prepare($sql, $stmt)){
            header("Location: ../newsupload.php?error=mysqlerror");
            exit();
        }
        else{
            mysqli_stmt_execute($sql);
            mysqli_stmt_store_result($sql);
        }
                $stmt = $conn->prepare("INSERT INTO hirek (cim, tartalom)
                VALUES(?, ?)");
                $stmt->bind_param("ss", $cim, $hir);
                $stmt->execute();
                $stmt->close();
                header("Location: ../newsupload.php?hirfeltoltes=siker");
                exit();
    }
}
else{
    header("Location: ../newsupload.php");
}