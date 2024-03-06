<script src="https://cdn.tailwindcss.com"></script>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

<?php
include_once "dbh.inc.php";
include_once "config_session.php";
include_once "edit.php";
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
        <body class='bg-[#131313]'>    
            <form  method='post' action='./edit.php'>
                <div class='p-4 md:px-44 mx-96 mt-4'>
                    <input type='hidden' name='id' value='$id'>
                        <div>
                                <label for='nev' class='block my-2 text-sm font-medium text-[#ffd899]'>Név</label>
                                <input type='text' name='nev' id='email' class='bg-[#61a352] border border-[#1e6726] text-black text-sm rounded-lg focus:ring-[#dfa553] focus:border-[#ffd899] block w-full p-2.5' placeholder='Gipsz Jakab' value='$name' required />
                            </div>
                            <div>
                                <label for='email' class='block my-2 text-sm font-medium text-[#ffd899]'>Email</label>
                                <input type='email' name='email' id='email' class='bg-[#61a352] border border-[#1e6726] text-black text-sm rounded-lg focus:ring-[#dfa553] focus:border-[#ffd899] block w-full p-2.5' placeholder='name@company.com' value='$email' required />
                            </div>
                            <div>
                                <label for='nev' class='block my-2 text-sm font-medium text-[#ffd899]'>Telefonszám</label>
                                <input type='text' name='telszam' id='email' class='bg-[#61a352] border border-[#1e6726] text-black text-sm rounded-lg focus:ring-[#dfa553] focus:border-[#ffd899] block w-full p-2.5' placeholder='+36XXXXXXXX' value='$telszam' required />
                            </div>
                            <div>
                                <label for='nev' class='block my-2 text-sm font-medium text-[#ffd899]'>Lakcím</label>
                                <input type='text' name='lakcim' id='email' class='bg-[#61a352] border border-[#1e6726] text-black text-sm rounded-lg focus:ring-[#dfa553] focus:border-[#ffd899] block w-full p-2.5' placeholder='Apponyi tér 1.' value='$lakcim' required />
                            </div>
                            <div class='mt-6'>
                                <button type='submit' class='w-full text-white bg-[#1e6726] border border-[#1e6726] hover:bg-[#dfa553] hover:text-black focus:ring-4 focus:outline-none focus:ring-[#1e6726] font-medium rounded-lg text-sm px-5 py-2.5 text-center' name='update' type='submit'>
                                    Megerősítés
                                </button>
                            </div>
                        </div>
                </div>
            </form>
        </body>";
