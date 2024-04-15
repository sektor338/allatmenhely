<!DOCTYPE html>
<html lang="hu">

<head>
  <link rel="stylesheet" href="main.css" />
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
  require_once("./includes/volunteer.help.php");

  ?>

  <form class="w-full max-w-lg" method="POST" action="">
    <div class="flex justify-center items-center w-screen h-auto">
      
      <div class="container mx-auto">

        <div class="p-8 w-4/6 rounded-2xl bg-primary m-auto mt-10">
          <h1 class="font-bold uppercase text-5xl max-md:text-2xl">
            JELENTKEZZ <br />
            ÖNKÉNTESNEK!
          </h1>
        <!-- Bekérések -->
          <div class="grid grid-cols-1 gap-5 md:grid-cols-2 my-4">
            <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" placeholder="Teljes név" name="full_name" />
            <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="email" placeholder="Email" name="email" />
            <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="tel" placeholder="Telefonszám" name="phone" />
            <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" placeholder="Lakcím" name="lakcim" />
          </div>

          <textarea placeholder="Ha szeretnél tudni több információt akkor ide írj..." class="w-full h-32 bg-gray-100 text-gray-900 p-3 rounded-lg focus:outline-none focus:shadow-outline my-4" name="megjegyzes"></textarea>
        <!-- Beküldés -->
          <div class="w-2/4 items-center mx-auto">
            <button class="hover:scale-110 transform active:scale-90 transition-transform uppercase text-sm font-bold bg-secondary text-gray-100 p-4 rounded-lg w-full focus:outline-none focus:shadow-outline">
              Küldés
            </button>
          </div>

        </div>
      </div>
    </div>
  </form>
</body>

</html>