<?php
session_start(); 
unset($_SESSION['username']);
session_destroy(); //On détruit le cookie de l'identifiant. 

header('Location: index.php'); //On revient au départ. 
exit;
?> 