<?php
include_once('includes/dbh.inc.php');
include_once('includes/config_session.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload'])) {
    $file = $_FILES['uploadedpic'];
    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileTmpName = $file['tmp_name'];
    $description = $_POST['description'];
    $title = $_POST['title'];
    $uploader = $_SESSION["username"];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    $allowedExt = array('jpg', 'jpeg', 'png', 'gif');

    if (in_array($fileActualExt, $allowedExt)) {
        if ($fileError === 0) {
            if ($fileSize < 10000000) {
                if(is_dir('uploads')){
                    $fileNewName = uniqid('', true) . "." . $fileActualExt;
                    $fileDestination = 'uploads/' . $fileNewName;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    $sql = "INSERT INTO `uploaded_img`(`title`, `description`, `url`, `uploader`) VALUES ('$title','$description','$fileDestination','$uploader')";
                    $res = mysqli_query($conn, $sql);
                    header("Location: index.php?upload=success");
                    
                }
                else{
                if(mkdir('uploads')){
                    $fileNewName = uniqid('', true) . "." . $fileActualExt;
                    $fileDestination = 'uploads/' . $fileNewName;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    $sql = "INSERT INTO `uploaded_img`(`title`, `description`, `url`, `uploader`) VALUES ('$title','$description','$fileDestination','$uploader')";
                    $res = mysqli_query($conn, $sql);
                    header("Location: index.php?upload=success");
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