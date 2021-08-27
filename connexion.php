<?php
try{
$pdo= new PDO('mysql:host=localhost;charset=utf8;dbname=mini_projet','root','');
}catch (PDOException $e)
{
  die('Erreur de connexion: '.$e->getMessage());
}

?>

