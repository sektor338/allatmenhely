<?php
require_once "dbh.inc.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nev = filter_var($_POST['nev'], FILTER_UNSAFE_RAW);
    $faj = filter_var($_POST['faj'], FILTER_UNSAFE_RAW);
    $szin = filter_var($_POST['szin'], FILTER_UNSAFE_RAW);
    $kor = filter_var($_POST['kor'], FILTER_UNSAFE_RAW);
    $nem = filter_var($_POST['nem'], FILTER_UNSAFE_RAW);
    $img = filter_var($_POST['img'], FILTER_UNSAFE_RAW);
    $meret = filter_var($_POST['meret'], FILTER_UNSAFE_RAW);
    $suly = filter_var($_POST['suly'], FILTER_UNSAFE_RAW);
    $egyeb = filter_var($_POST['egyeb'], FILTER_UNSAFE_RAW);
    $ivart = "Nem";

    if(empty($nev) || empty($faj) || empty($szin) || empty($kor) || empty($nem) || empty($meret) || empty($suly)){
        header("Location: ../newsupload.php?uresinput=1");
        exit();
    }
    else{
        $stmt = "SELECT * FROM allatok";
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
                if(isset($_POST['ivart']) && $_POST['ivart'] == "1"){
                    $ivart="Igen";
                }
                $stmt = "INSERT INTO allatok(nev, kor, nem, faj, kep, leiras, ivartalanitott, szin, meret, suly)
                VALUES('$nev', '$kor', '$nem', '$faj', '$img', '$egyeb', '$ivart', '$szin', '$meret', '$suly')";
                mysqli_query($conn, $stmt);
                header("Location: ../newsupload.php?allatfeltoltes=siker");
                exit();
            }
        }
else{
    header("Location: ../newsupload.php");
}