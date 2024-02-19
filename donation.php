<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fradisták Az Állatokért</title>
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


<div class="container mx-auto m-6 p-4 w-full h-screen">
    <p class="text-4xl text-[#ffd899] font-semibold mb-4">Adományozás</p>
        <p class="text-[#ffd899] font-semibold text-xl absolute -mb-6 z-20 ml-1">Most változtathatsz szegény állatok sorsán</p>
        <img src="images/catto2.jpg" alt="ceca" class="lg:w-2/5 w-full rounded border-[#ffd899] border inline-block">
        <p class="text-[#61a352] inline-block align-top w-1/4 lg:ml-2">Abban az esetben ha netán olyan szándéka támadna hogy véletlenül adományozni próbálna vagy akár még szeretne is, hogy kisállatok sorsán segítsen akkor a következő számlaszámra teheti meg: nyolc karakter-nyolc karakter<br>Előre is köszönjük.</p>


<div class="container mx-auto m-6 p-4 w-full grid place-items-center">
<script async
  src="https://js.stripe.com/v3/buy-button.js">
</script>

<stripe-buy-button
  buy-button-id="buy_btn_1Okrr8ArHuOCW9Ob6yExYprF"
  publishable-key="pk_live_51LgsAmArHuOCW9Ob6OBSaMDHM1bq3DRhFH9ugjzbvNGtYXcgMxUs5zmyzAL8SRz0lO0GAbn6fUWvaLX3CUKyBtoE00jvekCFH8"
>
</stripe-buy-button>
</div></div>
<div class="h-[40rem] w-[35rem] opacity-70 bg-secondary block rounded-[5rem] border-double border-[2rem] border-background">
        <p class="text-text text-center font-bold text-[2rem] mt-[1rem] rotate-[-4deg]">Tudsz Segíteni!</p>
        <p class="text-text text-center font-bold text-[1rem] mt-[1rem] rotate-[-1deg] pl-[2rem] pr-[2rem]">Minden adományt örömmel várunk! Adományozhatsz pénzt a tamógató pontjainkon, vagy segíthetsz pénz adománnyal itt (Csak forintot fogadunk el): </p>
        <form>
            <input placeholder="Huf" class="block m-auto rounded-[5rem] border-double border-[1rem] border-secondary pl-[1rem] mt-[1rem]" type="text">
        </form>
        <div class="absolute rotate-[-90deg] top-[29rem] left-[-6.8rem] "><img class=" h-[10rem] w-[30rem]" src="images/parentceca.png" alt=""></div>
        <p class="text-text text-center font-bold text-[1rem] mt-[5rem] rotate-[-1deg] pl-[2rem] pr-[2rem]">Ha Pénzt nem szánsz adományozni, egyéb dolgokat is elfogadunk(pl.: Eledel, pokróc, játékok stb). Add meg elérési informacióidat és megkeresünk! </p>
        <form>
            <input placeholder="E-mail" class="block m-auto rounded-[5rem] border-double border-[1rem] border-secondary pl-[1rem] mt-[1rem]" type="email">
            <input placeholder="Tel.:" class="block m-auto rounded-[5rem] border-double border-[1rem] border-secondary pl-[1rem]" type="tel">
        </form>
        <div class="absolute top-[10rem] left-[70rem] "><img class="rounded-[5000rem] w-[600px] h-[600px]" src="images/map.webp" alt=""></div>
    <!-- Pontok a térképen -->
        <div class="absolute top-[28.3rem] left-[91.3rem] "><img class="w-[50px] h-[50px]" src="images/pointer.webp" alt=""></div>
        <div class="absolute top-[23.9rem] left-[83.7rem] "><img class="w-[50px] h-[50px]" src="images/pointer.webp" alt=""></div>
        <div class="absolute top-[19.9rem] left-[83.3rem] "><img class="w-[50px] h-[50px]" src="images/pointer.webp" alt=""></div>
        <div class="absolute top-[24.5rem] left-[82.2rem] "><img class="w-[50px] h-[50px] rotate-[-50deg]" src="images/pointer.webp" alt=""></div>
</div>
<div class="h-[32rem] w-[18rem] opacity-70 bg-secondary block rounded-[5rem] border-double border-[2rem] border-background absolute top-[15rem] left-[47rem]">
        <p class="text-text text-center font-bold text-[2rem] mt-[1rem] rotate-[-4deg]">Adományozó pontok: </p>
        <p class="text-red-700 text-center font-bold text-[1rem] mt-[1rem] rotate-[-1deg] pl-[2rem] pr-[2rem]">Gyömrői út 119, Budapest, Hungary </p>
        <p class="text-red-700 text-center font-bold text-[1rem] mt-[1rem] rotate-[-1deg] pl-[2rem] pr-[2rem]">Nagy Diófa utca 19, Budapest, Hungary  </p>
        <p class="text-red-700 text-center font-bold text-[1rem] mt-[1rem] rotate-[-1deg] pl-[2rem] pr-[2rem]">Párkány utca 8/d, Budapest, Hungary  </p>
        <p class="text-red-700 text-center font-bold text-[1rem] mt-[1rem] rotate-[-1deg] pl-[2rem] pr-[2rem]">Dob utca 2., Budapest, Hungary  </p>
        <p class="text-red-700 text-center font-bold text-[1rem] mt-[1rem] rotate-[-1deg] pl-[2rem] pr-[2rem]">Hermina út 1-3, Tököl, Hungary  </p>
</div>
</body>
</html>
