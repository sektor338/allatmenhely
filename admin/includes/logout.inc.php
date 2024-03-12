<?php 
session_start();
session_unset();
session_destroy();

header("Locatioon: ../fooldal.php");