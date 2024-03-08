<?php 
include_once ("./dbh.inc.php");
if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $stmt = $conn->prepare("DELETE FROM onkentesek WHERE id= ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
header("Location: ../onkentes.php?delete=success");
}
?>