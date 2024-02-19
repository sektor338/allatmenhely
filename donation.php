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

        <div class="absolute top-[10rem] left-[70rem] "><img class="rounded-[5000rem] w-[600px] h-[600px]" src="images/map.webp" alt=""></div>
    <!-- Pontok a térképen -->
        <div class="absolute top-[28.3rem] left-[91.3rem] "><a href="https://www.google.com/maps/place/Budapest,+Gy%C3%B6mr%C5%91i+%C3%BAt+119,+1108/@47.4798978,19.0970548,12.63z/data=!4m6!3m5!1s0x4741c30168ed3c95:0xd05eb36d18cac756!8m2!3d47.4622691!4d19.167785!16s%2Fg%2F11j8w86j07?hl=hu&entry=ttu"><img class="w-[50px] h-[50px]" src="images/pointer.webp" alt=""></a></div>
        <div class="absolute top-[23.9rem] left-[83.7rem] "><a href="https://www.google.com/maps/place/Budapest,+Nagy+Di%C3%B3fa+u.+19,+1072/@47.4911206,19.0658658,13.75z/data=!4m6!3m5!1s0x4741dc680c560d6f:0xc926cd78fc00290a!8m2!3d47.4979425!4d19.0647922!16s%2Fg%2F11csgq7vv2?hl=hu&entry=ttu"><img class="w-[50px] h-[50px]" src="images/pointer.webp" alt=""></a></div>
        <div class="absolute top-[19.9rem] left-[83.3rem] "><a href="https://www.google.com/maps/place/Budapest,+P%C3%A1rk%C3%A1ny+u.+8,+1138/@47.4801832,18.9156432,12.33z/data=!4m6!3m5!1s0x4741dbefc5006fa9:0x12172d6bee471570!8m2!3d47.5288967!4d19.0598339!16s%2Fg%2F11h0t8rjlv?hl=hu&entry=ttu"><img class="w-[50px] h-[50px]" src="images/pointer.webp" alt=""></a></div>
        <div class="absolute top-[24.5rem] left-[82.2rem] "><a href="https://www.google.com/maps/place/Budapest,+Dob+u.+2,+1072/@47.4911205,19.037573,14.25z/data=!4m6!3m5!1s0x4741dc4240572149:0xdd19b90f2ac5f639!8m2!3d47.4962739!4d19.0589894!16s%2Fg%2F11c266mngg?hl=hu&entry=ttu"><img class="w-[50px] h-[50px] rotate-[-50deg]" src="images/pointer.webp" alt=""></a></div>

<div class="h-[32rem] w-[18rem] opacity-70 bg-secondary block rounded-[5rem] border-double border-[2rem] border-background absolute top-[15rem] left-[47rem]">
        <p class="text-text text-center font-bold text-[2rem] mt-[1rem] rotate-[-4deg]">Adományozó pontok: </p>
        <p class="text-red-700 text-center font-bold text-[1rem] mt-[1rem] rotate-[-1deg] pl-[2rem] pr-[2rem]"><a href="https://www.google.com/maps/place/Budapest,+Gy%C3%B6mr%C5%91i+%C3%BAt+119,+1108/@47.4798978,19.0970548,12.63z/data=!4m6!3m5!1s0x4741c30168ed3c95:0xd05eb36d18cac756!8m2!3d47.4622691!4d19.167785!16s%2Fg%2F11j8w86j07?hl=hu&entry=ttu">Gyömrői út 119, Budapest, Hungary</a> </p>
        <p class="text-red-700 text-center font-bold text-[1rem] mt-[1rem] rotate-[-1deg] pl-[2rem] pr-[2rem]"><a href="https://www.google.com/maps/place/Budapest,+Nagy+Di%C3%B3fa+u.+19,+1072/@47.4911206,19.0658658,13.75z/data=!4m6!3m5!1s0x4741dc680c560d6f:0xc926cd78fc00290a!8m2!3d47.4979425!4d19.0647922!16s%2Fg%2F11csgq7vv2?hl=hu&entry=ttu">Nagy Diófa utca 19, Budapest, Hungary</a>  </p>
        <p class="text-red-700 text-center font-bold text-[1rem] mt-[1rem] rotate-[-1deg] pl-[2rem] pr-[2rem]"><a href="https://www.google.com/maps/place/Budapest,+P%C3%A1rk%C3%A1ny+u.+8,+1138/@47.4801832,18.9156432,12.33z/data=!4m6!3m5!1s0x4741dbefc5006fa9:0x12172d6bee471570!8m2!3d47.5288967!4d19.0598339!16s%2Fg%2F11h0t8rjlv?hl=hu&entry=ttu">Párkány utca 8/d, Budapest, Hungary</a>  </p>
        <p class="text-red-700 text-center font-bold text-[1rem] mt-[1rem] rotate-[-1deg] pl-[2rem] pr-[2rem]"><a href="https://www.google.com/maps/place/Budapest,+Dob+u.+2,+1072/@47.4911205,19.037573,14.25z/data=!4m6!3m5!1s0x4741dc4240572149:0xdd19b90f2ac5f639!8m2!3d47.4962739!4d19.0589894!16s%2Fg%2F11c266mngg?hl=hu&entry=ttu">Dob utca 2., Budapest, Hungary </a> </p>
        <p class="text-red-700 text-center font-bold text-[1rem] mt-[1rem] rotate-[-1deg] pl-[2rem] pr-[2rem]"><a href="https://www.google.com/maps/place/T%C3%B6k%C3%B6l,+Hermina+%C3%BAt+1-3,+2316/@47.3177192,18.9665462,12.46z/data=!4m6!3m5!1s0x4741e53feca20c75:0x328c186fc99b8234!8m2!3d47.3370125!4d18.9966247!16s%2Fg%2F11qpmtd966?hl=hu&entry=ttu">Hermina út 1-3, Tököl, Hungary </a> </p>
</div>
<script async
  src="https://js.stripe.com/v3/buy-button.js">
</script>

<stripe-buy-button
  buy-button-id="buy_btn_1Okrr8ArHuOCW9Ob6yExYprF"
  publishable-key="pk_live_51LgsAmArHuOCW9Ob6OBSaMDHM1bq3DRhFH9ugjzbvNGtYXcgMxUs5zmyzAL8SRz0lO0GAbn6fUWvaLX3CUKyBtoE00jvekCFH8"
>
</stripe-buy-button>
</div>
</body>
</html>
