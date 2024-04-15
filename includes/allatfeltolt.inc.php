<?php
require_once "dbh.inc.php";
include_once('config_session.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nev = filter_var($_POST['nev'], FILTER_UNSAFE_RAW);
    $faj = filter_var($_POST['faj'], FILTER_UNSAFE_RAW);
    $kor = filter_var($_POST['kor'], FILTER_UNSAFE_RAW);
    $nem = filter_var($_POST['nem'], FILTER_UNSAFE_RAW);
    $meret = filter_var($_POST['meret'], FILTER_UNSAFE_RAW);
    $suly = filter_var($_POST['suly'], FILTER_UNSAFE_RAW);
    $szin = filter_var($_POST['szin'], FILTER_UNSAFE_RAW);
    $ivartalanitott = filter_var($_POST['ivartalanitott'], FILTER_UNSAFE_RAW);
    $leiras = filter_var($_POST['leiras'], FILTER_UNSAFE_RAW);
    $file = $_FILES['img'];
    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileTmpName = $file['tmp_name'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    //e4>d4

    $allowedExt = array('jpg', 'jpeg', 'png', 'gif');
    if (empty($ivartalanitott)) {
        $ivartalanitott=0;
    }
    if(empty($nev) || empty($faj) || empty($kor) || empty($nem) || empty($meret) || empty($suly) || empty($szin) || empty($leiras)){
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
                        $sql = "INSERT INTO `allatok`(`nev`, `faj`, `kep`, `kor`, `nem`, `meret`, `suly`, `szin`, `ivartalanitott`, `leiras`) VALUES ('$nev','$faj','$fileDestination','$kor','$nem','$meret','$suly','$szin','$ivartalanitott','$leiras')";
                        $res = mysqli_query($conn, $sql);
                        header("Location: ../newsupload.php?upload=success");
                        
                    }
                    else{
                    if(mkdir('../uploads')){
                        $fileNewName = uniqid('', true) . "." . $fileActualExt;
                        $fileDestination = 'uploads/' . $fileNewName;
                        $finalDestination = '../uploads/' . $fileNewName;
                        move_uploaded_file($fileTmpName, $finalDestination);
                        $sql = "INSERT INTO `allatok`(`nev`, `faj`, `kep`, `kor`, `nem`, `meret`, `suly`, `szin`, `ivartalanitott`, `leiras`) VALUES ('$nev','$faj','$fileDestination','$kor','$nem','$meret','$suly','$szin','$ivartalanitott','$leiras')";
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