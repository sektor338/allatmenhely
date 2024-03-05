<script src="https://cdn.tailwindcss.com"></script>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

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
include_once "./includes/volunteer.help.php";
include_once "includes/edit.php";

echo "<table style='margin:auto;'>
<tr><th>id</th><th>Név</th><th>Email</th><th>Tel. szám</th><th>Lakcím</th><th>Megjegyzés</th></tr>";

while($row = mysqli_fetch_array($res)){   //Creates a loop to loop through resu
    $id=$row['id'];
    $name = $row['nev'];
    $email = $row['email'];
    $telszam = $row['telefonszam'];
    $lakcim = $row['lakcim'];
    $egyeb = $row['egyeb'];
    echo "<tr>   <td> $id</td><td>$name</td><td>$email</td><td>$telszam</td><td>$lakcim</td><td>$egyeb</td> <td>
 
<form method='post' action='./includes/realedit.php'>
        <button  data-modal-target='authentication-modal' data-modal-toggle='authentication-modal' class='block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center' type='submit' name='editgomb' value='$id'>
        Szerkesztés
      </button>
    </form>

<td>

<form action='./includes/delete.php' method='post'>
<button type='submit' name='id' value='$id'>Delete</button>

    </form>
</td> </tr>";  //$row['index'] the index here is a field name
    }
echo "</table>";

?>