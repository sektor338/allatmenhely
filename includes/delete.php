<?php 
include_once ("./dbh.inc.php");
if(isset($_POST['id'])) {
    $id = $_POST['id'];
    mysqli_query($conn,"DELETE FROM onkentesek WHERE id= $id");
mysqli_close($conn);
header("Location: ../onkentes.php?delete=success");
}
?>