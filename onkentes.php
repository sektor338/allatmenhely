<style>
    td,  tr {
        border: 2px solid black;
        border-radius: 1px;
        padding: 30px;
        
    }
</style>

<?php
include_once "includes/dbh.inc.php";

echo "<table>";
while($row = mysqli_fetch_array($res)){   //Creates a loop to loop through results
    echo "<tr><td>" . htmlspecialchars($row['nev']) . "</td><td>" . htmlspecialchars($row['email']) . "</td> <td>" . htmlspecialchars($row['telefonszam']) . "</td><td>" . htmlspecialchars($row['lakcim']) . "</td><td>" . htmlspecialchars($row['egyeb']) . "</td> </tr>";  //$row['index'] the index here is a field name
    }
echo "</table>";