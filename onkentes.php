<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

<?php
include_once "includes/dbh.inc.php";
include_once "includes/config_session.php";
include_once "./includes/volunteer.help.php";
include_once "includes/edit.php";

echo "
<body class='bg-[#131313]'>
    <div class='mx-40 relative overflow-x-auto shadow-md sm:rounded-lg'>
        <table class='w-full text-sm text-left rtl:text-right text-black'>
            <thead class='text-xs text-[#ffd899] uppercase bg-[#1e6726]'>
                <tr>
                    <th scope='col' class='px-6 py-3'>id</th>
                    <th scope='col' class='px-6 py-3'>Név</th>
                    <th scope='col' class='px-6 py-3'>Email</th>
                    <th scope='col' class='px-6 py-3'>Tel. szám</th>
                    <th scope='col' class='px-6 py-3'>Lakcím</th>
                    <th scope='col' class='px-6 py-3'>Megjegyzés</th>
                    <th scope='col' class='px-6 py-3'>Szerkesztés</th>
                    <th scope='col' class='px-6 py-3'>Törlés</th>
                </tr>
            </thead>";
            
            while($row = mysqli_fetch_array($res)){
                $id=$row['id'];
                $name = $row['nev'];
                $email = $row['email'];
                $telszam = $row['telefonszam'];
                $lakcim = $row['lakcim'];
                $egyeb = $row['egyeb'];
                echo "
                <tbody>
                    <tr class='bg-[#61a352] border-b border-[#131313]'>
                        <td scope='row' class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap'>$id</td>
                        <td class='px-6 py-3'>$name</td>
                        <td class='px-6 py-3'>$email</td>
                        <td class='px-6 py-3'>$telszam</td>
                        <td class='px-6 py-3'>$lakcim</td>
                        <td class='px-6 py-3'>$egyeb</td>
                            <!-- Adat Szerkesztés -->
                        <td class='px-6 py-3'> 
                            <form method='post' action='./includes/realedit.php'>
                                <button data-modal-target='authentication-modal' data-modal-toggle='authentication-modal' class='block text-white bg-[#1e6726] hover:bg-[#dfa553] hover:text-black focus:ring-4 focus:outline-none focus:ring-[#1e6726] font-medium rounded-lg text-sm px-5 py-2.5 text-center' type='submit' name='editgomb' value='$id'>
                                    Szerkesztés
                                </button>
                            </form>
                            <!-- Adat Törlés -->
                        <td class='px-6 py-3'>
                            <form action='./includes/delete.php' method='post'>
                                <button type='submit' name='id' value='$id' class='block text-white bg-[#1e6726] hover:bg-[#dfa553] hover:text-black focus:ring-4 focus:outline-none focus:ring-[#1e6726] font-medium rounded-lg text-sm px-5 py-2.5 text-center'>
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>";
        }
echo "
        </table>
    </div>
</body>";