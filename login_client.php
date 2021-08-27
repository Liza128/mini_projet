<?php
 session_start();

//Connexion à la base de données
//(via PDO, utilisez la méthode de votre choix comme le type de base de données de votre choix)
require_once("connexion.php");

 
	
//Nous vérifions que l'utilisateur a bien envoyé les informations demandées 

if(!empty($_POST["username"]) &&!empty($_POST["password"])){
   
	//Nous allons demander le hash pour cet utilisateur à notre base de données :
	$query = $pdo->prepare('SELECT password_clt,id_clt FROM client WHERE username = :username');
	$query->bindParam(':username', $_POST["username"]);
	$query->execute();
	$result = $query->fetch();
	$hash = $result[0];
	$_SESSION['id_clt']=$result[1];
     $_SESSION['username'] = $_POST["username"];
     
     $idc=$_SESSION['id_clt'];


$requeteCount="SELECT count(*) countR from messagerieClient where id_clt='$idc'";

$resultatCount=$pdo->query($requeteCount);
$tabCount=$resultatCount->fetch();
$nbrmsgr=$tabCount['countR'];
$_SESSION['nbr_msg_e'] = $nbrmsgr;

$requeteCountt="SELECT count(*) countRr from messagerieAdmin where id_clt='$idc'";

$resultatCountt=$pdo->query($requeteCountt);
$tabCountt=$resultatCountt->fetch();
$nbrmsg=$tabCountt['countRr'];
$_SESSION['nbr_msg_r'] = $nbrmsg;



	
	//Nous vérifions si le mot de passe utilisé correspond bien à ce hash à l'aide de password_verify :
	if($_POST["password"]== $hash){
	
       //on gére les sessions
      //puis nous  accueillons l'utilisateur identifié
       
      header("location:espace_client.php");
        
        
	}else{
        	//Sinon nous signalons une erreur d'identifiant ou de mot de passe
		echo "<script>alert('login/password incorrect')</script>";
	}
		
}
?>


<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>login client</title>

    <!--=== Bootstrap CSS ===-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--=== Slicknav CSS ===-->
    <link href="assets/css/plugins/slicknav.min.css" rel="stylesheet">
    <!--=== Magnific Popup CSS ===-->
    <link href="assets/css/plugins/magnific-popup.css" rel="stylesheet">
    <!--=== Owl Carousel CSS ===-->
    <link href="assets/css/plugins/owl.carousel.min.css" rel="stylesheet">
    <!--=== Gijgo CSS ===-->
    <link href="assets/css/plugins/gijgo.css" rel="stylesheet">
    <!--=== FontAwesome CSS ===-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!--=== Theme Reset CSS ===-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="style.css" rel="stylesheet">
    <!--=== Responsive CSS ===-->
    <link href="assets/css/responsive.css" rel="stylesheet">
    <style>
#page-title-area{
    background-image: url(./assets/img/slider-img/slider-img-4.jpg);
}

</style>


    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">
        /* $(function () {
            $("#envoyer").click(function () {
                valid = true;
                if ($("#username").val() == "") {
                    $("#username").next(".error-message").fadeIn().text(
                        "Veuillez entrer le nom d'utilisateur");
                    $("#username").css("border-color", "#ff0000");
                    valid = false;
                } else if (!$("#username").val().match(/^[a-z]+$/i)) {
                    $("#username").next(".error-message").fadeIn().text(
                        "Veuillez entrer un nom d'utilisateur valide");
                    $("#username").css("border-color", "#ff0000");
                    valid = false;
                } else {
                    $("#username").next(".error-message").fadeOut();
                    $("#username").css("border-color", "#00ff00");
                }

                if ($("#password").val() == "") {
                    $("#password").next(".error-message").fadeIn().text(
                        "Veuillez entrer le mot de passe ");
                    $("#password").css("border-color", "#ff0000");
                    valid = false;
                } else {
                    $("#password").next(".error-message").fadeOut();
                    $("#password").css("border-color", "#00ff00");
                }
                return valid;
            });


        });*/
       /* function surligne(champ, erreur) {
            if (erreur)
                champ.style.backgroundColor = "#fba";
            else
                champ.style.backgroundColor = "";
        }







        function verifPseudo(champ) {
            if (champ.value.length < 2 || champ.value.length > 25) {
                surligne(champ, true);
                return false;
            } else {
                surligne(champ, false);
                return true;
            }
        }*/
    </script>
</head>

<body class="loader-active">

    <!--== Preloader Area Start ==-->
    <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="assets/img/preloader.gif" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

    <!--== Header Area Start ==-->
    <header id="header-area" class="fixed-top">
        <!--== Header Top Start ==-->
        <div id="header-top" class="d-none d-xl-block">
            <div class="container">
                <div class="row">
                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-left">
                        <i class="fa fa-map-marker"></i> Tizi-ouzou, La Toure
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> +213 58 59 00 45
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> ouvert de 8:00 à 17:00
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Social Icons Start ==-->
                    <div class="col-lg-3 text-right">
                        <div class="header-social-icons">
                            <a href="www.behance.com"><i class="fa fa-behance"></i></a>
                            <a href="www.pinterest.com"><i class="fa fa-pinterest"></i></a>
                            <a href="www.facebook.com"><i class="fa fa-facebook"></i></a>
                            <a href="www.linkedin.com"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <!--== Social Icons End ==-->
                </div>
            </div>
        </div>
        <!--== Header Top End ==-->

        <!--== Header Bottom Start ==-->
        <div id="header-bottom">
            <div class="container">
                <div class="row">
                    <!--== Logo Start ==-->
                    <div class="col-lg-4">
                        
                            <!-- <img src="assets/img/logo.png" alt="JSOFT"> -->
                            <h3 style="color:white"> SamLocation.com</h3>
                      
                    </div>
                    <!--== Logo End ==-->

                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">

                            <ul>
                                <li class="active"><a href="index.php">Accueil</a>

                                </li>
                              

                                <li><a href="conditions.php">conditions</a>

                                </li>

                                <li><a href="">connexion</a>
                                    <ul>
                                        <li><a href="login_client.php">client</a></li>
                                        <li><a href="login_admin.php">admin</a></li>

                                    </ul>
                        </nav>
                    </div>
                    <!--== Main Menu End ==-->
                </div>
            </div>
        </div>
        <!--== Header Bottom End ==-->
    </header>
    <!--== Header Area End ==-->




    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2 style="color:#ffd000; text-shadow: 2px 2px #FF0000;">se connecter</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p></p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Login Page Content Start ==-->
    <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                            <h3>bienvenu client!</h3>
                            <form action="login_client.php" method="post" class="form" onsubmit="return verif()">
                                <div class="username wrap-input" data-validate="Nom utilisateur requit">
                                    <input type="text" placeholder="login" required name="username" id="username"
                                        onblur="verifPseudo(this)">


                                </div>

                                <div class="password wrap-input" data-validate="mot de passe requit">
                                    <input type="password" placeholder="mot de passe" name="password" id="password" required onblur="verifPassword(this)">

                                </div>


                                <div class="log-btn wrap-input">
                                    <button type="submit" id="envoyer" name="submit"><i class="fa fa-sign-in"></i> se
                                        connecter</button>
                                </div>
                            </form>
                        </div>


                        <div class="create-ac">
                            <p>vous n'avez pas de compte? <a href="register.php">créer un compte</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Login Page Content End ==-->
    <?php include("footer2.php"); ?>


    <!--== Scroll Top Area Start ==-->
    <div class="scroll-top">
        <img src="assets/img/scroll-top.png" alt="JSOFT">
    </div>
    <!--== Scroll Top Area End ==-->

    <!--=======================Javascript============================-->
    <!--=== Jquery Min Js ===-->
    <script src="f.js"></script>
    <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <!--=== Jquery Migrate Min Js ===-->
    <script src="assets/js/jquery-migrate.min.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== Gijgo Min Js ===-->
    <script src="assets/js/plugins/gijgo.js"></script>
    <!--=== Vegas Min Js ===-->
    <script src="assets/js/plugins/vegas.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/plugins/isotope.min.js"></script>
    <!--=== Owl Caousel Min Js ===-->
    <script src="assets/js/plugins/owl.carousel.min.js"></script>
    <!--=== Waypoint Min Js ===-->
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <!--=== CounTotop Min Js ===-->
    <script src="assets/js/plugins/counterup.min.js"></script>
    <!--=== YtPlayer Min Js ===-->
    <script src="assets/js/plugins/mb.YTPlayer.js"></script>
    <!--=== Magnific Popup Min Js ===-->
    <script src="assets/js/plugins/magnific-popup.min.js"></script>
    <!--=== Slicknav Min Js ===-->
    <script src="assets/js/plugins/slicknav.min.js"></script>

    <!--=== Mian Js ===-->
    <script src="assets/js/main.js"></script>

</body>

</html>