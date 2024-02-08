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

    <!-- KÉPEK -->

    <div class="container mx-auto flex flex-row m-6 p-4 w-full h-screen">
      <div
        class="p-5 flex flex-col basis-1/2 bg-primary rounded-lg mr-6 min-h-[900px]"
      >
        <h1 class="text-lg text-white mb-8 border-b-2 border-secondary">
          Fogadj örökbe!
        </h1>
        <div class="flex flex-col flex-grow">
          <div class="cella">
            <span>...</span>
          </div>
          <div class="cella">
            <span>...</span>
          </div>
        </div>
      </div>

      <!-- FOGALMAZÁS -->

      <div
        class="flex-grow flex flex-col p-5 basis-1/2 bg-primary rounded-lg mr-6 min-h-[900px]"
      >
        <h1 class="text-lg text-white mb-8 border-b-2 border-secondary">
          Hogyan segíthettek
        </h1>
        <div class="flex flex-col flex-grow">
          <div class="cella">
            <span>Adományozz:<br> Pénzadományokat fogadunk, amelyeket az állatok ellátására és a menhely fenntartására használunk fel.
            Az adományokat közvetlenül a weboldalunkon keresztül lehet megtenni.</span>
          </div>
          <div class="cella">
            <span>Önkénteskedj:<br> Mindig szükségünk van önkéntesekre, 
            akik segítenek az állatok gondozásában, takarításban, vagy akár az eseményeink szervezésében.</span>
          </div>
          <div class="cella">
            <span>Adoptálj egy állatot: <br> Sok szeretetre méltó állat várja, hogy örök otthonra találjon.
               Tekintsd meg az örökbefogadható állatainkat a weboldalunkon.</span>
          </div>
          <div class="cella">
            <span>Népszerűsítsd a menhelyet:<br> Oszd meg a menhelyünk tevékenységét a közösségi médiában,
               hogy minél több emberhez eljusson az üzenetünk.</span>
          </div>
          <div class="cella">
            <span>Hozz adományt: <br> Mindig szükségünk van állateledelekre,
               takarókra, játékokra és egyéb felszerelésekre.</span>
          </div>
          <div class="cella">
                <span>Köszönjük, hogy segítesz a rászoruló állatokon!</span>
               </div>
        </div>
      </div>

      <!-- LE HÍREK -->

      <div
        class="flex flex-col p-5 basis-1/4 bg-primary rounded-lg h-full flex-grow min-h-[900px]"
      >
        <h1 class="text-lg text-white mb-8 border-b-2 border-secondary">
          Hírek
        </h1>
        <div class="flex flex-col flex-grow">
          <div class="cella">
            <span>...</span>
          </div>
          <div class="cella">
            <span>...</span>
          </div>
          <div class="cella">
            <span>...</span>
          </div>
          <div class="cella">
            <span>...</span>
          </div>
          <div class="cella">
            <span>...</span>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
