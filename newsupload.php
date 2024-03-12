<!DOCTYPE html>
<html lang="hu">
<head>
    <link rel="stylesheet" href="main.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fradisták Az Állatokért</title>
    <link rel="stylesheet" href="newsupload.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        text: "var(--text)",
                        background: "var(--background)",
                        primary: "var(--primary)",
                        secondary: "var(--secondary)",
                        accent: "var(--accent)",
                    },
                },
            },
        };
    </script>
    <link rel="icon" type="image/x-icon" href="images/logo.png" />
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
                content-visibility: auto;
            }
            .cella {
                @apply flex-grow bg-secondary rounded-lg p-5 mb-4;
            }
            .section {
            }
        }
        @layer base {
            :root {
                --text: #ffd899;
                --background: #131313;
                --primary: #1e6726;
                --secondary: #61a352;
                --accent: #dfa553;
            }
        }
    </style>
    <script src="js/index.js" defer></script>
</head>

<body class="bg-background min-h-screen pt-[114px]">

<?php
      
    require_once("./includes/navbar.php");

?>

<!-- feltölts váltó gomb -->

<div class="w-full max-w-[40rem] h-[67px] mt-5 m-auto">
    <button class="button-57 mt-4 float-right" role="button" id="gomb"><span class="text" id="str1">Váltás</span><span id="str2">Állat feltöltés</span></button>
</div>

<!-- Hírfeltöltés -->

<form id="tab1" method="POST" action="includes/hirfeltolt.inc.php">
    <div class="w-full max-w-[40rem] h-[50rem] bg-[#1e6726] rounded-lg m-auto rounded-tr-none">
        <h1 class="text-2xl text-white mb-8 mx-8 border-b-2 border-secondary">Hírfeltöltés</h1>
        <div class="w-full h-24">
            <div class="w-5/12 h-8 bg-[#61a352] rounded-lg ml-8  inline-block align-top">
                <input type="text" name="cim" id="cim" placeholder="Cím" class="bg-inherit rounded-lg h-full w-full text-white placeholder:text-white pl-2 focus:outline-none focus:ring focus:ring-violet-300">
                <button type="submit" value="Beküldés" class="h-8 w-5/12 bg-[#61a352] rounded-lg cursor-pointer text-white mt-4 hover:bg-[#003300] text-center">Beküldés</button>
            </div>
            <div class="w-3/12 h-full bg-[#61a352] rounded-lg mr-8 inline-block align-top float-right ">
                <input type="file" id="img" name="img" accept="image/*" class="w-full h-full opacity-0 cursor-pointer z-40 relative">
                <div class="w-20 h-16 bg-white -mt-20 mx-auto rounded-lg">
                    <div class="h-12 w-2 bg-slate-500 rounded-full relative left-9 top-2 z-30"></div>
                    <div class="h-2 w-12 bg-slate-500 rounded-full relative left-4 -top-5 z-30"></div>
                </div>
            </div>
        </div>
        <div class="m-auto max-w-[36rem] h-[36.5rem] w-full">
            <textarea type="text" name="hir" id="hir" class="w-full h-full bg-slate-200 rounded-lg mt-6 text-white placeholder:text-white focus:outline-none focus:ring focus:ring-violet-300 pl-2 pt-1 resize-none" placeholder="Ide írd a hír szövegét" style="background-color: #61a352;"></textarea>
        </div>
    </div>
</form>

<!-- Állatfeltöltés -->

<form id="tab2" method="POST" action="includes/allatfeltolt.inc.php" class="hidden">
    <div class="w-full max-w-[40rem] h-[52rem] bg-[#1e6726] rounded-lg m-auto rounded-tr-none">
        <h1 class="text-2xl text-white mb-8 mx-8 border-b-2 border-secondary">Állatfeltöltés</h1>
        <div class="w-full h-24">
            <div class="w-5/12 h-8 bg-[#61a352] rounded-lg ml-8  inline-block align-top">
                <input type="text" name="nev" id="nev" placeholder="Állat neve" class="bg-inherit rounded-lg h-full w-full text-white placeholder:text-white pl-2 focus:outline-none focus:ring focus:ring-violet-300 mt-px">
                <input type="text" name="faj" id="faj" placeholder="Állat fajtája" class="bg-[#61a352] rounded-lg h-8 w-full text-white placeholder:text-white pl-2 focus:outline-none focus:ring focus:ring-violet-300 mt-5">
            </div>
            <div class="w-3/12 h-full bg-[#61a352] rounded-lg mr-8 inline-block align-top float-right ">
                <input type="file" id="img" name="img" accept="image/*" class="w-full h-full opacity-0 cursor-pointer z-40 relative">
                <div class="w-20 h-16 bg-white -mt-20 mx-auto rounded-lg">
                    <div class="h-12 w-2 bg-slate-500 rounded-full relative left-9 top-2 z-30"></div>
                    <div class="h-2 w-12 bg-slate-500 rounded-full relative left-4 -top-5 z-30"></div>
                </div>
            </div>
        </div>
        <div class="w-full h-full">
            <input type="number" min="0" max="999" name="kor" id="kor" placeholder="Állat kora" class="bg-[#61a352] rounded-lg h-8 w-5/12 text-white placeholder:text-white pl-2 focus:outline-none focus:ring focus:ring-violet-300 mt-5 ml-8">
            <select name="nem" id="nem" class="h-8 w-5/12  ml-9 rounded-lg text-white bg-[#61a352] focus:outline-none focus:ring focus:ring-violet-300">
                <option disabled selected hidden>Nem</option>
                <option value="Nőstény">Nőstény</option>
                <option value="Hím">Hím</option>
            </select>
            <input type="text" name="meret" id="meret" placeholder="Állat mérete" class="bg-[#61a352] ml-8 rounded-lg h-8 w-5/12 text-white placeholder:text-white pl-2 focus:outline-none focus:ring focus:ring-violet-300 mt-5">
            <input type="number" min="0.1" step="any" name="suly" id="suly" placeholder="Állat súlya (Kg)" class="bg-[#61a352] ml-9 rounded-lg h-8 w-5/12 text-white placeholder:text-white pl-2 focus:outline-none focus:ring focus:ring-violet-300 mt-5">

            <div class="flex items-center w-full">
            <input type="text" name="szin" id="szin" placeholder="Állat színe" class="bg-[#61a352] ml-8 rounded-lg h-8 w-5/12 text-white placeholder:text-white pl-2 focus:outline-none focus:ring focus:ring-violet-300 mt-5">

                <input id="ivart" name="ivart" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2 ml-10 mt-5">
                <label for="ivart" class="ms-2 text-sm font-medium text-white mt-5">Ivartalanított-e?</label>

            </div>
            <div class="m-auto max-w-[36rem] h-[26rem] w-full">
                <textarea type="text" name="egyeb" id="egyeb" class="w-full h-full bg-slate-200 rounded-lg mt-6 text-white placeholder:text-white focus:outline-none focus:ring focus:ring-violet-300 pl-2 pt-1 resize-none" placeholder="Egyéb információ" style="background-color: #61a352;"></textarea>
                <button type="submit" value="Beküldés" class="align-top cursor-pointer  mt-4 hover:bg-[#003300] text-center bg-[#61a352] rounded-lg h-8 w-5/12 text-white  pl-2 focus:outline-none focus:ring focus:ring-violet-300  mr-8 float-right">Beküldés</button>
            </div>
        </div>
</div>
</form>

<script>

    let h1 = document.getElementById("str2");
    let a = 0;

    gomb.addEventListener("click", e =>{
        tab1.classList.toggle("hidden")
        tab2.classList.toggle("hidden")
        if (a==0) {
            a++;
            h1.innerText="Hír feltöltése";
        }
        else {
            a--;
            h1.innerText="Állat feltöltése";
        }
        })

</script>

</body>

</html>