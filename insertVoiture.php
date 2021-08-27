<?php
require_once("connexion.php");

$immtv=isset($_POST['immtV'])?$_POST['immtV']:"";
$marquev=isset($_POST['marqueV'])?$_POST['marqueV']:"";
$modelev=isset($_POST['modeleV'])?$_POST['modeleV']:"";
$classev=isset($_POST['classeV'])?$_POST['classeV']:"";
$couleurv=isset($_POST['couleurV'])?$_POST['couleurV']:"";
$prixv=isset($_POST['prixV'])?$_POST['prixV']:"";
$nbr_portes=isset($_POST['nbr_portesV'])?$_POST['nbr_portesV']:"";
$carburant=isset($_POST['carburantV'])?$_POST['carburantV']:"";
$boite_vitesse=isset($_POST['boite_vitesseV'])?$_POST['boite_vitesseV']:"";
$annee=isset($_POST['anneeV'])?$_POST['anneeV']:"";
$photo=isset($_FILES['photo']['name'])?$_FILES['photo']['name']:"";

$imageTemp=$_FILES['photo']['tmp_name'];
echo $imageTemp;
move_uploaded_file($imageTemp,"assets/img/voitures/".$photo);

$requete="insert into voiture(imt_vtr,mrq_vtr,modele_vtr,classe_vtr,couleur_vtr,prix_par_jour,photo,carburant,boite_vitesse,annee,nbr_portes) values(?,?,?,?,?,?,?,?,?,?,?) ";

$params=array($immtv,$marquev,$modelev,$classev,$couleurv,$prixv,$photo,$carburant,$boite_vitesse,$annee,$nbr_portes);

$resultat=$pdo->prepare($requete);
$resultat->execute($params);

header("location:voitures.php");


?>