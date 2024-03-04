<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name=description content="about us">
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
      .kkhover {
        transition: all 0.3s;
      }
      .kkhover:hover {
        color: var(--accent);
      }
      @layer utilities {
        .content-auto {
          content-visibility: auto;
        }
        .cella {
          @apply flex flex-grow bg-secondary rounded-lg p-5 mb-4 shadow-xl justify-center items-center;
        }
        .section {
          @apply flex-grow flex flex-col p-5 bg-primary rounded-lg min-h-[500px];
        }
        .res_text{
          @apply text-xl max-md:text-lg max-sm:text-base p-3;
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

<!-- ELÉRHETŐSÉGEK -->

<div class="container flex flex-row text-2xl max-md:text-xl max-md:flex-col mx-auto m-6 p-4 w-full h-auto gap-8">

      <div class="basis-1/3 max-md:mb-6 section">

        <h1 class="text-2xl mb-8 border-b-2 border-secondary text-white">
          Elérhetőségeink
        </h1>
        
        <!-- FACEBOOK -->
          <div class="basis-1/2 cella">
            <a  href="https://www.facebook.com/fradistakazallatokert/" target="_blank">
              <img class="rounded-full scale-75 object-left w-full h-full aspect-square object-contain" src="images/facebook.jpg" alt="logo">
            </a>
            <span class="kkhover m-2">
              <a href="https://www.facebook.com/fradistakazallatokert/" target="_blank" class="text-xl max-md:text-lg max-sm:text-base">
                Facebook oldalunk
              </a>
            </span>
          </div>

        <!-- EMAIL US -->
          <div class="basis-1/2 cella">
            <span class="res_text">
              Küldj email-t:<br>
              fradistakazallatokert@gmail.com
            </span>
          </div>
        </div>

<!-- RÓLUNK -->

      <div class="basis-2/3 section">
        <h1 class="text-2xl mb-8 border-b-2 border-secondary text-white">
           Állatmentő szolgálat
        </h1>
        <div class="flex flex-col flex-grow">
          
        <!-- Mi a célunk? -->
          <div class="cella basis-1/4">
            <span class="res_text">
              Célunk a bajbajutott állatok megmentése és új otthon biztosítása szerető környezettel.
            </span>
          </div>

        <!-- Miért kezdtük el? -->
          <div class="cella basis-1/4">
            <span class="res_text">
              Örömmel jelentjük be, hogy megalakult a <br>
              “Fradisták Az Állatokért” csapata. <br> <br>
              Egy páran összejöttünk 2021 októberén, <br>
              de sokatokra szükségünk lesz! <br> <br> 
              Az Állatok Világnapján terveztük bejelenteni a létrejöttünket. <br>
              Így hát most üzenjük mindenkinek: Köszöntsétek kedvenceiteket, és segítsetek a rászoruló állatokon lehetőségeitekhez mérten.
            </span>
          </div>

        </div>
      </div>
</div>

</body>
</html>
