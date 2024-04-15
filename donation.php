<!DOCTYPE html>
<html lang="hu">
<head>
    <link rel="stylesheet" href="main.css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="donation for Fradi">
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
        @media screen and (max-width: 600px)
        {
            p {
                font-size: 36px;
            }
        }
    </style>
    <script src="js/index.js" defer></script>
</head>

<body class="bg-background min-h-screen pt-[114px]">

<?php
      
      require_once("./includes/navbar.php");

?>

<script async
  src="https://js.stripe.com/v3/buy-button.js">
</script>
<style>
    @keyframes slideInRight {
        from {
            transform: translateX(800px);
        }
        to {
            transform: translateX(0);
        }
    }
    .poi1 {
        animation: slideInRight 1.7s cubic-bezier(0.25, 0.1, 0.25, 1) 1s 1 normal both;
        transform: translateX(-150px);
    }
    .poi2 {
        animation: slideInRight 1.1s cubic-bezier(0.25, 0.1, 0.25, 1) 1s 1 normal both;
        transform: translateX(-150px);
    }
    .poi3 {
        animation: slideInRight 1.5s cubic-bezier(0.25, 0.1, 0.25, 1) 1s 1 normal both;
        transform: translateX(-150px);
    }
    .poi4 {
        animation: slideInRight 0.7s cubic-bezier(0.25, 0.1, 0.25, 1) 1s 1 normal both;
        transform: translateX(-150px);
    }
  

    
    .ggver {
      transition: all 0.3s;
    }
    .ggver:hover {
      color: var(--text);
      rotate: 1deg;
    }

  </style>

<div class="container flex flex-row max-[1000px]:flex-col max-md:text-xl max-sm:text-l text-2xl w-full h-auto gap-8 justify-center mx-auto items-center mt-8">

    <div class="h-full max-md:w-[380px] w-[500px] border-double border-[2rem] border-secondary rounded-[5rem] justify-center items-center p-8">
        <p class="text-white text-center font-bold text-[2rem] mb-2">Adományozó pontok:</p>
        <div class="flex flex-col text-white flex-grow">
            <div class="block m-2 bg-[#1e6726] ggver text-center font-bold text-[27px] rounded-[5rem]"><a target="_blank" href="https://www.google.com/maps/place/Budapest,+Gy%C3%B6mr%C5%91i+%C3%BAt+119,+1108/@47.4798978,19.0970548,12.63z/data=!4m6!3m5!1s0x4741c30168ed3c95:0xd05eb36d18cac756!8m2!3d47.4622691!4d19.167785!16s%2Fg%2F11j8w86j07?hl=hu&entry=ttu">Gyömrői út 119, Budapest, Hungary</a></div>
            <div class="block m-2 bg-[#1e6726] ggver text-center font-bold text-[27px] rounded-[5rem]"><a target="_blank" href="https://www.google.com/maps/place/Budapest,+Nagy+Di%C3%B3fa+u.+19,+1072/@47.4911206,19.0658658,13.75z/data=!4m6!3m5!1s0x4741dc680c560d6f:0xc926cd78fc00290a!8m2!3d47.4979425!4d19.0647922!16s%2Fg%2F11csgq7vv2?hl=hu&entry=ttu">Nagy Diófa utca 19, Budapest, Hungary</a></div>
            <div class="block m-2 bg-[#1e6726] ggver text-center font-bold text-[27px] rounded-[5rem]"><a target="_blank" href="https://www.google.com/maps/place/Budapest,+P%C3%A1rk%C3%A1ny+u.+8,+1138/@47.4801832,18.9156432,12.33z/data=!4m6!3m5!1s0x4741dbefc5006fa9:0x12172d6bee471570!8m2!3d47.5288967!4d19.0598339!16s%2Fg%2F11h0t8rjlv?hl=hu&entry=ttu">Párkány utca 8/d, Budapest, Hungary</a></div>
            <div class="block m-2 bg-[#1e6726] ggver text-center font-bold text-[27px] rounded-[5rem]"><a target="_blank" href="https://www.google.com/maps/place/Budapest,+Dob+u.+2,+1072/@47.4911205,19.037573,14.25z/data=!4m6!3m5!1s0x4741dc4240572149:0xdd19b90f2ac5f639!8m2!3d47.4962739!4d19.0589894!16s%2Fg%2F11c266mngg?hl=hu&entry=ttu">Dob utca 2., Budapest, Hungary</a></div>
            <div class="block m-2 bg-[#1e6726] ggver text-center font-bold text-[27px] rounded-[5rem]"><a target="_blank" href="https://www.google.com/maps/place/T%C3%B6k%C3%B6l,+Hermina+%C3%BAt+1-3,+2316/@47.3177192,18.9665462,12.46z/data=!4m6!3m5!1s0x4741e53feca20c75:0x328c186fc99b8234!8m2!3d47.3370125!4d18.9966247!16s%2Fg%2F11qpmtd966?hl=hu&entry=ttu">Hermina út 1-3, Tököl, Hungary</a></div>
        </div>
    </div>
    <div class="flex h-full max-md:w-[380px] w-[500px] border-double border-[2rem] border-secondary rounded-[5rem] justify-center items-center p-[55px]">
        <stripe-buy-button class=""
            buy-button-id="buy_btn_1Okrr8ArHuOCW9Ob6yExYprF"
            publishable-key="pk_live_51LgsAmArHuOCW9Ob6OBSaMDHM1bq3DRhFH9ugjzbvNGtYXcgMxUs5zmyzAL8SRz0lO0GAbn6fUWvaLX3CUKyBtoE00jvekCFH8"
            >
        </stripe-buy-button>
    </div>


</div>

<div class="container flex flex-row max-[1000px]:flex-col max-md:text-xl max-sm:text-l text-2xl w-full h-auto justify-center mx-auto items-center mt-8 mb-2">
    
    <div class="relative flex">
        <img class="mt-4 rounded-[5000rem] max-md:w-[380px] max-md:h-[380px] w-[600px] h-[600px] max-w-[600px] max-h-[600px]" src="images/map.webp" alt="">
        <div class="poi1 absolute max-md:top-[190px] max-md:left-[205px] top-[316px] left-[340px] "><a target="_blank" href="https://www.google.com/maps/place/Budapest,+Gy%C3%B6mr%C5%91i+%C3%BAt+119,+1108/@47.4798978,19.0970548,12.63z/data=!4m6!3m5!1s0x4741c30168ed3c95:0xd05eb36d18cac756!8m2!3d47.4622691!4d19.167785!16s%2Fg%2F11j8w86j07?hl=hu&entry=ttu" name="location_pointer"><img class="kolt1 min-w-[50px] min-h-[50px] max-w-[50px] max-h-[50px]" src="images/pointer.webp" alt=""></a></div>
        <div class="poi2 absolute max-md:top-[145px] max-md:left-[126px] top-[240px] left-[216px] "><a target="_blank" href="https://www.google.com/maps/place/Budapest,+Nagy+Di%C3%B3fa+u.+19,+1072/@47.4911206,19.0658658,13.75z/data=!4m6!3m5!1s0x4741dc680c560d6f:0xc926cd78fc00290a!8m2!3d47.4979425!4d19.0647922!16s%2Fg%2F11csgq7vv2?hl=hu&entry=ttu" name="location_pointer"><img class="kolt2 min-w-[50px] min-h-[50px] max-w-[50px] max-h-[50px]" src="images/pointer.webp" alt=""></a></div>
        <div class="poi3 absolute max-md:top-[105px] max-md:left-[125px] top-[179px] left-[214px] "><a target="_blank" href="https://www.google.com/maps/place/Budapest,+P%C3%A1rk%C3%A1ny+u.+8,+1138/@47.4801832,18.9156432,12.33z/data=!4m6!3m5!1s0x4741dbefc5006fa9:0x12172d6bee471570!8m2!3d47.5288967!4d19.0598339!16s%2Fg%2F11h0t8rjlv?hl=hu&entry=ttu" name="location_pointer"><img class="kolt3 min-w-[50px] min-h-[50px] max-w-[50px] max-h-[50px]" src="images/pointer.webp" alt=""></a></div>
        <div class="poi4 absolute max-md:top-[155px] max-md:left-[107px] top-[250px] left-[197px] "><a target="_blank" href="https://www.google.com/maps/place/Budapest,+Dob+u.+2,+1072/@47.4911205,19.037573,14.25z/data=!4m6!3m5!1s0x4741dc4240572149:0xdd19b90f2ac5f639!8m2!3d47.4962739!4d19.0589894!16s%2Fg%2F11c266mngg?hl=hu&entry=ttu" name="location_pointer"><img class="kolt4 min-w-[50px] min-h-[50px] max-w-[50px] max-h-[50px] rotate-[-50deg]" src="images/pointer.webp" alt=""></a></div>
    </div>  
    
</div>

</body>
</html>
