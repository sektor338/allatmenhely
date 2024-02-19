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
  <div class="flex justify-center items-center p-8 min-w-[380px]">
    <img class="top-[17rem] left-[45rem]  h-[30rem] w-[30rem]" src="images/pollaklogo1.png" alt="">
  </div>

  <!-- Macska a lap alján -->
  <footer>
    <div class="absolute mx-auto bottom-0 w-full min-w-[380px]">
      <img class="h-[10rem] w-[30rem] block m-auto" src="images/parentceca.png" alt="">
    </div>
  </footer>

  </div>
</body>

</html>