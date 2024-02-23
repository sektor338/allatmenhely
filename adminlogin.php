<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Bejelentkezés</title>
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
</head>

<body class="bg-background min-h-screen pt-[114px] bg-gradient-to-b from-stone-900 to-green-900">

<?php
      
    

?>

<div class="flex items-center justify-center mt-12">
<a class="block max-w-sm  p-6 bg-gradient-to-bl from-black to-zinc-800 border border-green-500  rounded-lg shadow ">





<div class="flex items-center justify-center mt-12 my-12 mx-12">
<div class=" relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
    <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
</div></div>

<div class="flex items-center justify-center">
<label for="input-group-1" class="block mb-12 text-sm font-medium text-gray-200 dark:text-white"></label>
<div class="relative mb-6">
  <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
    <svg class="w-4 h-5 text-green-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
        <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
        <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
    </svg>
  </div>
  <input type="text" id="input-group-1" class="hover:bg-gray-800 bg-gray-900 border border-gray-500 text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-50 ps-10 p-2.5  " placeholder="Email">
</div></div>
<div class="flex items-center justify-center">
<label for="input-group-1" class="block mb-12 text-sm font-medium text-gray-200 dark:text-white"></label>
<div class="relative mb-6">
  <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-5 text-green-500">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
</svg>

  </div>
  <input type="text" id="input-group-1" class="hover:bg-gray-800 bg-gray-900 border border-gray-500 text-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-50 ps-10 p-2.5  " placeholder="Jelszó">
</div>
</div>

<div class="flex items-center justify-center">
<button type="button" class="mt-12 border-gray-900 text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 " >Bejelentkezés</button>

</div>
</a></div>







</body>

</html>
