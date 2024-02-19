<!DOCTYPE html>
<html lang="hu">
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

<body class="bg-background ">

<?php
      
      require_once("./includes/navbar.php");
      require_once("./includes/volunteer.help.php");

?>

<form class="w-full max-w-lg " method="POST" action="">
            <div class="flex justify-center items-center w-screen h-screen">
	<!-- COMPONENT CODE -->
	<div class="container mx-auto my-4 px-4 lg:px-20">

		<div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl bg-primary mx-auto">
			<div class="flex">
				<h1 class="font-bold uppercase text-5xl">JELENTKEZZ <br /> ÖNKÉNTESNEK!</h1>
			</div>
			<div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
				<input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
            type="text" placeholder="Teljes név" name="full_name"/>
				<input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
            type="email" placeholder="Email" name="email"/>
				<input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
            type="text" placeholder="Telefonszám" name="phone"/>
            <input class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
            type="text" placeholder="Lakcím" name="lakcim"/>

        </div>
				<div class="my-4">
					<textarea placeholder="Ha szeretnél tudni több információt akkor ide írj..." class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" name="megjegyzes"></textarea>
				</div>
				<div class="my-2 w-1/2 lg:w-1/4">
					<button class="hover:scale-105 transform active:scale-90 transition-transform uppercase text-sm font-bold tracking-wide bg-secondary text-gray-100 p-3 rounded-lg w-full 
                      focus:outline-none focus:shadow-outline">
           Küldés
          </button>
				</div>
			</div>

		
        </div>
      </div>
   



</form>
    
      
        
</body>
</html>
