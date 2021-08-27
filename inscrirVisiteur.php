<?PHP
 require_once("connexion.php");

if ( isset($_POST['envoi'])) {
 
$nom_clt = $_POST['nom_clt'];
$prenom_clt = $_POST['prenom_clt'];
$username = $_POST['username'];
$email_clt = $_POST['email_clt'];

$mdp= $_POST['mdp'];
$password_clt = $_POST['password_clt'];
$tel_clt= $_POST['tel_clt'];
$adresse_clt= $_POST['adresse_clt'];


$age_clt = $_POST['age_clt'];








if (strlen($password_clt) < 6) {
    echo "Mot de passe trop court !";
}




if($mdp==$password_clt){
	$req = $pdo->prepare("INSERT INTO client(prenom_clt, nom_clt, age_clt,  tel_clt, username,email_clt, password_clt,adresse_clt )
                                     VALUES (:prenom_clt, :nom_clt, :age_clt,  :tel_clt,   :username,:email_clt, :password_clt,  :adresse_clt)");


 $exec=$req->execute(array(":prenom_clt"=>$prenom_clt,
                            ":nom_clt"=>$nom_clt,
							":age_clt"=>$age_clt,
							":tel_clt"=>$tel_clt,
							":username"=>$username,
							":email_clt"=>$email_clt,
                            ":password_clt"=>$password_clt,
                            ":adresse_clt"=>$adresse_clt
                        ));
                        if($exec){
                            echo'<script>alert("inscription réussie");</script>';
                            header("refresh:0.5;login_client.php");

                            
                          }
                          else{
                            
                              echo'<script>alert("Echec");</script>';
                            header("refresh:0.5;register.php");

                            }
                 }
                else { echo'<script>alert("vos mots de passe ne sont pas identiques :veuillez resaisir vos données");</script>';
                    header("refresh:0.5;register.php");

                
                }
                 
                
                
                
                }
                 ?>
                
                
                