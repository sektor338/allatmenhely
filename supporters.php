<!DOCTYPE html>
<html lang="hu-HU">
<head>
  <link rel="stylesheet" href="main.css">
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

  <!-- Navbar -->
  <?php
  require_once("./includes/navbar.php");
  ?>

  <!--  Támogatók (1) -->

  <div class="flex justify-center items-center m-6">
    <img class="h-[500px] w-[500px] 
                max-md:h-[450px] max-md:w-[450px] 
                max-sm:h-[350px] max-sm:w-[350px]" src="images/pollaklogo1.png" alt="Pollák">
  </div>

</body>
</html>

