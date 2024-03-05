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
include_once "dbh.inc.php";
include_once "config_session.php";
include_once "edit.php";
  //Creates a loop to loop through resu 
    $id = $_POST['editgomb'];
     $stmt = "SELECT * FROM onkentesek WHERE id= '$id' LIMIT 1";
     $result =  mysqli_query ($conn, $stmt);
     $row = mysqli_fetch_array($result);
 
        $name = $row['nev'];
        $email = $row['email'];
        $telszam = $row['telefonszam'];
        $lakcim = $row['lakcim'];
        $egyeb  = $row['egyeb'];
    echo "     
               <form  method='post' action='.   /edit.php'>
            <div class='p-4 md:p-5'>
            <input type='hidden' name='id' value='$id'>
                <div>
                        <label for='nev' class='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>Név</label>
                        <input type='text' name='nev' id='email' class='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white' placeholder='Gipsz Jakab' value='$name' required />
                    </div>
                    <div>
                        <label for='email' class='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>Email</label>
                        <input type='email' name='email' id='email' class='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white' placeholder='name@company.com' value='$email' required />
                    </div>
                    <div>
                        <label for='nev' class='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>Telefonszám</label>
                        <input type='text' name='telszam' id='email' class='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white' placeholder='+36XXXXXXXX' value='$telszam' required />
                    </div>
                    <div>
                        <label for='nev' class='block mb-2 text-sm font-medium text-gray-900 dark:text-white'>Lakcím</label>
                        <input type='text' name='lakcim' id='email' class='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white' placeholder='Apponyi tér 1.' value='$lakcim' required />
                    </div>
                  <br>
                    <button type='submit' class='w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800' name='update' type='submit'>Megerősítés</button>
  
             </form>
    
         ";
