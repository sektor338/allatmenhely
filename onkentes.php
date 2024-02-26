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
include_once("./includes/volunteer.help.php");
include_once "includes/edit.php";

echo "<table style='margin:auto;'>
<tr><th>Név</th><th>Email</th><th>Tel. szám</th><th>Lakcím</th><th>Megjegyzés</th></tr>";

while($row = mysqli_fetch_array($res)){   //Creates a loop to loop through results
    echo "<tr><td>" . htmlspecialchars($row['nev']) . "</td><td>" . htmlspecialchars($row['email']) . "</td> <td>" . htmlspecialchars($row['telefonszam']) . "</td><td>" . htmlspecialchars($row['lakcim']) . "</td><td>" . htmlspecialchars($row['egyeb']) . "</td> <td>
    <form name='edit' method='post' action='./includes/edit.php'>
       
        <button data-modal-target='authentication-modal' data-modal-toggle='authentication-modal' class='block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center' type='button'>
        Szerkesztés
      </button>
    </form>
</td>
<td>
    <form action='' method='post'>
    
      <a href='onkentes.php?id='>Törlés</a>
    </form>
</td> </tr>";  //$row['index'] the index here is a field name
    }
echo "</table>";



?>




<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                   Adatok szerkesztése
                </h3>
                <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" action="./includes/edit.php" method="post"   >
                <div>
                        <label for="nev" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Név</label>
                        <input type="text" name="nev" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Gipsz Jakab" value="<?php $name ?>" required />
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" value="<?php $email ?>" required />
                    </div>
                    <div>
                        <label for="nev" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefonszám</label>
                        <input type="text" name="telszam" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="+36XXXXXXXX" value="<?php $telszam ?>" required />
                    </div>
                    <div>
                        <label for="nev" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lakcím</label>
                        <input type="text" name="lakcim" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Apponyi tér 1." value="<?php $lakcim ?>" required />
                    </div>
                  
                    <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" name="update">Megerősítés</button>
            
                </form>
            </div>
        </div>
    </div>
</div> 
