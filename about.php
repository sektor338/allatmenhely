<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" lang="hu-HU"/>
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

<div class="container mx-auto flex flex-row m-6 p-4 w-full h-auto text-xl">
      <div
        class="p-5 flex flex-col basis-1/3 bg-primary rounded-lg mr-6 min-h-[460px]">
        <h1 class="text-2xl mb-8 border-b-2 border-secondary">
          Elérhetőségeink
        </h1>
        
        <!-- FACEBOOK -->
          <div class="flex basis-1/3 bg-secondary rounded-lg p-5 mb-4 shadow-xl justify-center  items-center text-underline">
            <a  href="https://www.facebook.com/fradistakazallatokert/" target="_blank"> <img class="rounded-full scale-75 object-left" src="images/facebook.jpg" alt="logo"></a>
            <span class="hover:text-accent m-2"><a href="https://www.facebook.com/fradistakazallatokert/" target="_blank">Facebook oldalunk</a> </span>
          </div>
        <!-- EMAIL US -->
          <div class="flex basis-1/3 bg-secondary rounded-lg p-5 mb-4 shadow-xl text-center justify-center items-center">
            <span>Küldj email-t:<br>fradistakazallatokert@gmail.com</span></a>
          </div>
        <!-- PHONE? -->
          <div class="flex basis-1/3 bg-secondary rounded-lg p-5 mb-4 shadow-xl text-center justify-center items-center">
            <span>[telefonszám]</span>
          </div>
        </div>

<!-- RÓLUNK -->

      <div
        class="p-5 flex flex-col basis-2/3 bg-primary rounded-lg min-h-[460px]">
        <h1 class="text-2xl mb-8 border-b-2 border-secondary">
        Állatmentő szolgálat
        </h1>
        <div class="flex flex-col flex-grow">
        <!-- Mi a célunk? -->
          <div class="flex basis-1/4 bg-secondary rounded-lg p-5 mb-4 shadow-xl justify-center items-center">
            <span class="p-3">Célunk a bajbajutott állatok megmentése és új otthon biztosítása szerető környezettel.</span>
          </div>
        <!-- Miért kezdtük el? -->
          <div class="flex basis-1/4 bg-secondary rounded-lg p-5 mb-4 shadow-xl justify-center items-center">
            <span class="p-3">Örömmel jelentjük be, hogy megalakult a <br> “Fradisták Az Állatokért” csapata. <br> <br>
                  Egy páran összejöttünk 2021 októberén, <br> de sokatokra szükségünk lesz! <br> <br> Az Állatok Világnapján terveztük bejelenteni a létrejöttünket. <br>
                  Így hát most üzenjük mindenkinek: Köszöntsétek kedvenceiteket, és segítsetek a rászoruló állatokon lehetőségeitekhez mérten.
            </span>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
