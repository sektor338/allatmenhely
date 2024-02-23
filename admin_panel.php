<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
<body class="bg-background">
    <?php 
        include_once("./includes/admin_navbar.php")
    ?>

    <div class="flex-grow flex flex-col p-5 w-80 bg-primary rounded-lg m-auto min-h-[400px] mt-36">

      <button class="rounded-md m-5 p-3 bg-accent hover:bg-[#D5912A] text-xl w-69">Felhasználók kezelése</button>

      <button class="rounded-md m-5 p-3 bg-accent hover:bg-[#D5912A] text-xl w-69">Állatok kezelése</button>

      <button class="rounded-md m-5 p-3 bg-accent hover:bg-[#D5912A] text-xl w-69">Hírek kezelése</button>

      <button class="rounded-md m-5 p-3 bg-accent hover:bg-[#D5912A] text-xl w-69">Önkéntesek</button>

    </div>
</body>
</html>