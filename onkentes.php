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
?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile </h6>
        </div>
        <div class="card-body">
        <?php

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM onkentesek WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="includes/update.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label> Username </label>
                                <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control"
                                    placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="edit_email" value="<?php echo $row['email'] ?>" class="form-control"
                                    placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="edit_password" value="<?php echo $row['password'] ?>"
                                    class="form-control" placeholder="Enter Password">
                            </div>

                            <a href="register.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

                        </form>
                        <?php
                }
            }
        ?>
        </div>
    </div>
</div>

</div>
 