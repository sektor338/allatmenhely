<!DOCTYPE html>
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
          @apply flex flex-grow bg-secondary rounded-lg p-5 mb-4 shadow-xl justify-center items-center;
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
    <!--  
        Rezponzív?
        Telefonon meglehessen nézni normálisan
        Email: fradistakazallatokert@gmail.com       
        állatokat lopni
        <hamis hírek3
        Bedi fogalmazás -> hogyan segíthetünk
    -->

      <?php
      
        require_once("./includes/navbar.php");

      ?>

<!-- ELÉRHETŐSÉGEK -->

<div class="container mx-auto flex flex-row m-6 p-4 w-full h-screen text-white text-xl">
      <div
        class="p-5 flex flex-col basis-1/2 bg-primary rounded-lg mr-6 min-h-[900px]">
        <h1 class="text-2xl text-white mb-8 border-b-2 border-secondary">
          Elérhetőségeink
        </h1>
        
        <!-- FACEBOOK -->
          <div class="cella text-center flex justify-center items-center text-underline">
          <a href="https://www.facebook.com/fradistakazallatokert/"> <img class="rounded-full w-[200px] h-[200px]" src="images/facebook.jpg" alt="logo"></a>

            <span class="hover:text-accent ml-6"><a href="https://www.facebook.com/fradistakazallatokert/">Facebook oldalunk</a> </span>
          </div>
        <!-- EMAIL US -->
          <div class="cella">
            <span> fradistakazallatokert@gmail.com  </span>
          </div>
        <!-- PHONE? -->
          <div class="cella">
            <span>[telefonszám]</span>
          </div>
        </div>

<!-- RÓLUNK -->

      <div
        class="p-5 flex flex-col basis-1/2 bg-primary rounded-lg mr-6 min-h-[900px]">
        <h1 class="text-2xl text-white mb-8 border-b-2 border-secondary">
        Állatmentő szolgálat
        </h1>
        <div class="flex flex-col flex-grow">
        <!-- Mi a célunk? -->
          <div class="cella">
            <span>(Mi a célunk?)</span>
          </div>
        <!-- Miért kezdtük el? -->
          <div class="cella">
            <span>(Miért kezdtük el?)</span>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
