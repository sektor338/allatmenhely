<!DOCTYPE html>
<html lang="hu-HU">
<head>
  <link rel="stylesheet" href="main.css">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fradisták Az Állatokért</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/x-icon" href="images/logo.png" />
  <script src="js/index.js" defer></script>
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
	<div class="w-full max-w-[40rem] h-[50rem] bg-[#1e6726] rounded-lg mt-5 m-auto">
		<h1 class="text-2xl text-white mb-8 mx-8 border-b-2 border-secondary">
			Hírfeltöltés
		</h1>
		<div class="w-full h-24">
			<div class="w-5/12 h-8 bg-[#61a352] rounded-lg ml-8  inline-block align-top">
				<input type="text" name="cim" id="cim" placeholder="Cím" class="bg-inherit rounded-lg h-full w-full text-white placeholder:text-white pl-2 focus:outline-none focus:ring focus:ring-violet-300">
				<input type="submit" value="Beküldés" class="h-8 w-5/12 bg-[#61a352] rounded-lg cursor-pointer text-white mt-4 hover:bg-[#003300] text-center">
			</div>
			<div class="w-3/12 h-full bg-[#61a352] rounded-lg mr-8 inline-block align-top float-right ">
				<input type="file" id="img" name="img" accept="image/*" class="w-full h-full opacity-0 cursor-pointer z-40 relative">
				<div class="w-20 h-16 bg-white -mt-20 mx-auto rounded-lg">
					<div class="h-12 w-2 bg-slate-500 rounded-full relative left-9 top-2 z-30"></div>
					<div class="h-2 w-12 bg-slate-500 rounded-full relative left-4 -top-5 z-30"></div>
				</div>
			</div>
		</div>
		<div class="m-auto max-w-[36rem] h-[37rem] w-full">
			<textarea class="w-full h-full bg-slate-200 rounded-lg mt-6 text-white placeholder:text-white focus:outline-none focus:ring focus:ring-violet-300 pl-2 pt-1" placeholder="Ide írd a hír szövegét" style="background-color: #61a352;"></textarea>
		</div>
	</div>
</body>
</html>