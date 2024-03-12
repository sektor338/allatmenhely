<!DOCTYPE html>
<html lang="hu-HU">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fradisták Az Állatokért</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/x-icon" href="images/logo.png" />
  <style>
		@keyframes rotating {
  	from {
    	-ms-transform: rotate(0deg);
    	-moz-transform: rotate(0deg);
    	-webkit-transform: rotate(0deg);
    	-o-transform: rotate(0deg);
    	transform: rotate(0deg);
  	}
  	to {
    	-ms-transform: rotate(360deg);
    	-moz-transform: rotate(360deg);
    	-webkit-transform: rotate(360deg);
    	-o-transform: rotate(360deg);
   	 transform: rotate(360deg);
 	 }
}
		.rotating {
  		-webkit-animation: rotating 2s linear infinite;
  		-moz-animation: rotating 2s linear infinite;
  		-ms-animation: rotating 2s linear infinite;
  		-o-animation: rotating 2s linear infinite;
  		animation: rotating 2s linear infinite;
		}
  </style>
</head>
<body class="bg-background min-h-screen pt-[114px]">
  <?php include 'includes/navbar.php'; ?>
  <div class="container mx-auto px-4 py-8 text-center">
      <h1 class="text-text font-semibold text-2xl mb-4">Az adományodat sikeresen megkaptuk, köszönjük a támogatást!</h1>
      <img src="images/catto2.jpg" alt="ceca" class="lg:w-2/5 w-full rounded border-[#ffd899] border inline-block rotating">
  </div>
</body>
</html>
