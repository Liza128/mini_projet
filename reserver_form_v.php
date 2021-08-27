<?php

session_start();
require_once("connexion.php");
 

 
 
 
   // si on a reçu une valeur du formulaire
    $date = $_GET['date_debut_res'];
	 $imt_vtr =$_GET["imt"];
   $duree_res=$_GET['duree_res'];
     $id=$_SESSION['id_clt'];

    
     $sql = "INSERT INTO `reservation`(`date_debut_res`, `imt_vtr`, `duree_res` ,`id_clt` ,`etat_res`)   VALUES (?,?,?,?,?)";
   
     
    

     $params=array($date,$imt_vtr,$duree_res,$id,'en attente');
     $resultat=$pdo->prepare($sql);
 
 
 
 $exec= $resultat->execute($params);
 

 if($exec){
    echo'<script>alert("votre reservation est effectuée");</script>';
    header("refresh:0.5;reserver_p.php");

    
  }
  else{
    echo'<script>alert("Echec");</script>';
   header("refresh:0.5;voitures_dispo.php");

  }
     
		// vérifier si la requête d'insertion a réussi
      
  
?>
