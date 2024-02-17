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

<?php
      
      require_once("./includes/navbar.php");

?>


<div class="container mx-auto m-6 p-4 w-full grid place-items-center">
<script async
  src="https://js.stripe.com/v3/buy-button.js">
</script>

<stripe-buy-button
  buy-button-id="buy_btn_1Okrr8ArHuOCW9Ob6yExYprF"
  publishable-key="pk_live_51LgsAmArHuOCW9Ob6OBSaMDHM1bq3DRhFH9ugjzbvNGtYXcgMxUs5zmyzAL8SRz0lO0GAbn6fUWvaLX3CUKyBtoE00jvekCFH8"
>
</stripe-buy-button>
</div>
</body>
</html>
