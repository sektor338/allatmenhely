<?php
require_once "dbh.inc.php";
include_once('config_session.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $cim = filter_var($_POST['cim'], FILTER_UNSAFE_RAW);
    $hir = filter_var($_POST['hir'], FILTER_UNSAFE_RAW);
    $file = $_FILES['img'];
    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileTmpName = $file['tmp_name'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    $allowedExt = array('jpg', 'jpeg', 'png', 'gif');

    if(empty($cim) || empty($hir)){
        header("Location: ../newsupload.php?uresinput=1");
        exit();
    }
    else{
        if (in_array($fileActualExt, $allowedExt)) {
            if ($fileError === 0) {
                if ($fileSize < 10000000) {
                    if(is_dir('../uploads')){
                        $fileNewName = uniqid('', true) . "." . $fileActualExt;
                        $fileDestination = 'uploads/' . $fileNewName;
                        $finalDestination = '../uploads/' . $fileNewName;
                        move_uploaded_file($fileTmpName, $finalDestination);
                        $sql = "INSERT INTO `hirek`(`cim`, `tartalom`, `kep`) VALUES ('$cim','$hir','$fileDestination')";
                        $res = mysqli_query($conn, $sql);
                        header("Location: ../newsupload.php?upload=success");
                        
                    }
                    else{
                    if(mkdir('../uploads')){
                        $fileNewName = uniqid('', true) . "." . $fileActualExt;
                        $fileDestination = 'uploads/' . $fileNewName;
                        $finalDestination = '../uploads/' . $fileNewName;
                        move_uploaded_file($fileTmpName, $finalDestination);
                        $sql = "INSERT INTO `hirek`(`cim`, `tartalom`, `kep`) VALUES ('$cim','$hir','$fileDestination')";
                        $res = mysqli_query($conn, $sql);
                        header("Location: ../newsupload.php?upload=success");
                    }
                    else{
                        echo "Valami szar";
                    }
                }
                }
                else {
                    echo "Túl nagy..... ERŐSEBBEN APUCI!";
                }
            } else {
                echo "Hiba történt a file feltöltése közben!";
            }
        } else {
            echo "Nem megfelelő file formátum!";
        }
        }
}
else{
    header("Location: ../newsupload.php");
}