<style>
    td,  tr {
        border: 2px solid black;
        border-radius: 1px;
        padding: 30px;
        
    }
</style>

<?php
include_once "includes/dbh.inc.php";
include_once "includes/config_session.php";



function($conn){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $delete= mysqli_query($conn,"DELETE FROM onkentesek WHERE id = $id");
        if ($delete != mysqli_query($conn,"DELETE FROM onkentesek WHERE id = $id"))    
            {
                header("Location: index.php?tenyomorek");
            }
    }
};

echo "<table style='margin:auto;'>";
while($row = mysqli_fetch_array($res)){   //Creates a loop to loop through results
    echo "<tr><td>" . htmlspecialchars($row['nev']) . "</td><td>" . htmlspecialchars($row['email']) . "</td> <td>" . htmlspecialchars($row['telefonszam']) . "</td><td>" . htmlspecialchars($row['lakcim']) . "</td><td>" . htmlspecialchars($row['egyeb']) . "</td> <td>
    <form action='register_edit.php' method='post'>
        <input type='hidden' name='edit_id' value=". htmlspecialchars($row['id']) . ">
        <button  type='submit' name='edit_btn' class='btn btn-success'> EDIT</button>
    </form>
</td>
<td>
    <form action='code.php' method='post'>
      <input type='hidden' name='delete_id' value=". htmlspecialchars($row['id']) .">
      <button type='submit' name='delete_btn' class='btn btn-danger'> DELETE</button>
    </form>
</td> </tr>";  //$row['index'] the index here is a field name
    }
echo "</table>";