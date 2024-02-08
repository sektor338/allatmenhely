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
</head>

<body class="bg-background min-h-screen pt-[114px]">

<nav class="p-4 border-b-2 border-accent absolute top-0 left-0 w-full">
    <div class="text-text container mx-auto flex justify-between">
        <div class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="images/logo.png" alt="Logó" class="w-20" />
            <a href="index_2.html">
            <span class="text-2xl font-bold text-accent"
            >Fradisták Az Állatokért</span
            ></a
            >
        </div>
        <div class="max-sm:absolute right-5 top-5">
            <div class="w-20 h-2 bg-white"></div>
            <div class=""></div>
            <div class=""></div>
        </div>
        <!-- az legyen aláhúzva amelyik témát a felhasználó látja -->
        <div class="items-center text-lg flex space-x-6">
            <a href="supporters.php">Támogatóink</a>
            <a href="about.php">Rólunk</a>
            <a href="donation.php">Adományozás</a>
            <a href="volunteer.php">Jelentkezz önkéntesnek</a>
        </div>
    </div>
</nav>


<div class="container mx-auto m-6 p-4 w-full h-screen">

</div>
</body>
</html>
