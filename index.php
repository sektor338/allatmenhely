<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fradisták Az Állatokért</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="description" content="Fradi állatmentő szolgálat">
    <link rel="stylesheet" href="main.css">
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
          @apply flex-grow bg-secondary rounded-lg p-5 mb-4 shadow-xl;
        }
        .section {
          @apply flex-grow flex flex-col p-5 bg-primary rounded-lg min-h-[500px];
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

    <!-- KÉPEK -->
    <!-- adatbázisból lekérés -->
    
      <div class="container flex flex-row max-[1000px]:flex-col max-md:text-xl max-sm:text-l text-2xl mx-auto m-6 p-4 w-full h-auto gap-8">

      <div class="flex gap-8 max-md:flex-col">

        <div class="basis-1/2 section">
          <h1 class="text-2xl border-b-2 border-secondary mb-8 text-white">
            Fogadj örökbe!
          </h1>
          <div class="flex flex-col flex-grow">
            <div class="cella">
              <!-- kép -->
            </div>
            <div class="cella">
              <!-- kép -->
            </div>
          </div>
        </div>

      <!-- FOGALMAZÁS -->

        <div class="basis-1/2 section">
          <h1 class="text-2xl border-b-2 border-secondary mb-8 text-white">
            Hogyan segíthettek
          </h1>
          <div class="flex flex-col flex-grow">
            <div class="cella">
              <span><u class="text-2xl">Adományozz</u><br>Pénzadományokat fogadunk, amelyeket az állatok ellátására és a menhely fenntartására használunk fel.
              Az adományokat közvetlenül a weboldalunkon keresztül lehet megtenni.</span>
            </div>
            <div class="cella">
              <span><u class="text-2xl">Önkénteskedj</u><br> Mindig szükségünk van önkéntesekre, 
              akik segítenek az állatok gondozásában, takarításban, vagy akár az eseményeink szervezésében.</span>
            </div>
            <div class="cella">
              <span><u class="text-2xl">Adoptálj egy állatot</u><br> Sok szeretetre méltó állat várja, hogy örök otthonra találjon.
                Tekintsd meg az örökbefogadható állatainkat a weboldalunkon.</span>
            </div>
            <div class="cella">
              <span><u class="text-2xl">Népszerűsítsd a menhelyet</u><br> Oszd meg a menhelyünk tevékenységét a közösségi médiában,
                hogy minél több emberhez eljusson az üzenetünk.</span>
            </div>
            <div class="cella">
              <span> <u class="text-2xl">Hozz adományt</u> <br> Mindig szükségünk van állateledelekre,
                takarókra, játékokra és egyéb felszerelésekre.</span>
            </div>
            <div class="cella">
                  <span>Köszönjük, hogy segítesz a rászoruló állatokon!</span>
                </div>
          </div>
        </div>
      
      </div>
      <!-- HÍREK -->
      <!-- adatbázisból lekérés -->

      <div class="basis-1/4 section">
          <h1 class="text-2xl border-b-2 border-secondary mb-8 text-white">
            Hírek
          </h1>
          <div class="flex flex-col flex-grow">
            <div class="cella">
              <span></span>
            </div>
            <div class="cella ">
              <span></span>
            </div>
            <div class="cella">
              <span></span>
            </div>
            <div class="cella">
              <span></span>
            </div>
            <div class="cella">
              <span></span>
            </div>
            <div class="cella">
              <span></span>
            </div>
          </div>
        </div>
    

  </body>
</html>
