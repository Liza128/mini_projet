<?php
session_start();

         require_once("connexion.php");

         
         //recuperer les valeurs du formulaire
 
  
     // $requeteCount="select count(*) countV from voiture where (mrq_vtr like '%$mqmd%' or modele_vtr like '%$mqmd%') and type_vtr='$type'";










//requête SQL:
 
$sql =  "SELECT * FROM voiture " ;
//exécution de la requête:
$requete = $pdo -> query( $sql ) ; 




?>




<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>voitures disponibles</title>

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
    background-image: url(assets/img/slider-img/slider-img-1.jpg);
    

}



#navbar ul {
            list-style: none;
            margin-left: 0px;
            padding: 0;
            background-color: bleu;

        }

        #navbar ul li a {
            text-decoration: none;
            float: left;
            margin-right: 8px;
            margin-bottom: 0px;
            margin-top: 0px;


            font-family: "arial black", gadget, sans-serif;
            color: white;
            border: 1px solid black;
            border-bottom: none;
            padding: 20px;
            width: 200px;//115
            text-align: center;
            background: #0a0e4e;
            display: block;

        }

        #navbar  li a:hover {
            background: #f90;
            color: black;
            text-shadow: 1px 1px 1px #000;
        }
    

    </style>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
    <li class="active"><a href="espace_client.php">  <span class="fa fa-home"></span> &nbsp;Accueil</a>

    </li>



    
    <li><a href="voitures_dispo.php">  voitures</a>
   

    </li>
     
    
    
    <li><a href="conditions2.php">conditions</a> 
   

    </li> 
   
   
    <li><a href="deconnexion.php">   déconnexion</a> </li>
    

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
    <section id="page-title-area" class="section-padding overlay ">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2 style="color:#ffd000; text-shadow: 2px 2px red;">voitures disponibles</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p style="color:white;font-size:20px; ">choisissez votre véhicule de qualité.</p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>


        </div>
    </section>
    <!--== Page Title Area End ==-->



    <div id="navbar" class=" col-md-6 " style="background-color:blue;" align="center">

<ul>
      <li><a href="marque_r.php"> marques  &nbsp;<img
                                        src="assets/img/recherche.png" width="25px"></a> 
    </li>
      <li><a href="classe_r.php">classe&nbsp;<img
                                        src="assets/img/recherche.png" width="25px"></a></li>
      <li><a href="prix_r.php">prix &nbsp;<img
                                        src="assets/img/recherche.png" width="25px"></a></li>
     
</ul>
</div>

    <!--== Login Page Content Start ==-->

    <section id="gallery-page-content" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   
                       
                    <!-- Filtering Menu -->

                    <div class="row popular-car-gird">
                        <!-- Single Popular Car Start -->
                        <?php
                while($donnees = $requete->fetch())
                {
                    ?>
                        <div class="col-lg-4 col-md-6 con suv mpv">
                            <div class="single-popular-car">
                                <div class="p-car-thumbnails">

                                    <a href="car-details.php?
                                    mrq=<?php echo $donnees['mrq_vtr']; ?>&
                                    imt=<?php echo $donnees['imt_vtr']; ?>&
                                   mdl=<?php echo $donnees['modele_vtr']; ?>&
                                    prix=<?php echo $donnees['prix_par_jour'];?>&
                                    classe=<?php echo $donnees['classe_vtr']; ?>&
                                    couleur=<?php echo $donnees['couleur_vtr']; ?>&
                                    porte=<?php echo $donnees['nbr_portes'];?>&
                                    car=<?php echo $donnees['carburant']; ?>&
                                    bv=<?php echo $donnees['boite_vitesse']; ?>&
                                    annee=<?php echo $donnees['annee']; ?>&
                                    photo=<?php echo $donnees['photo']; ?>
                                    ">

                                        <img src="assets/img/voitures/<?php echo $donnees['photo'] ; ?>"
                                            class="card-img-top" alt="Accroche HTML" alt="voiture" height="100px"
                                            width="170px" class="img-rounded" style="">

                                    </a>
                                </div>

                                <div class="p-car-content">
                                    <h3>
                                        <input type="hidden" immatricule:&nbsp;<?php echo $donnees['imt_vtr'];?>>
                                        <h3 class="card-title" style="color:red">
                                            <?php echo $donnees['mrq_vtr'];?>&nbsp;<?php echo $donnees['modele_vtr'];?>
                                        </h3>

                                        <span class="price"><i class="fa fa-tag"></i>
                                            prix:&nbsp;<?php echo $donnees['prix_par_jour'];?>&nbsp;DA/Jour</span>
                                    </h3>

                                    <h5>caractéristiques</h5>

                                    <div class="p-car-feature">

                                        <a><?php echo $donnees['classe_vtr'];?></a>
                                        <a><?php echo $donnees['couleur_vtr'];?></a>
                                        <a><?php echo $donnees['nbr_portes'];?>&nbsp;portes</a>
                                        <a><?php echo $donnees['carburant'];?></a>
                                        <a>boite de vitesse&nbsp; <?php echo $donnees['boite_vitesse'];?></a>
                                        <a><?php echo $donnees['annee'];?></a>
                                       
                                    </div>

                                    <a href="car-details.php?
                                    mrq=<?php echo $donnees['mrq_vtr']; ?>&
                                    imt=<?php echo $donnees['imt_vtr']; ?>&
                                   mdl=<?php echo $donnees['modele_vtr']; ?>&
                                    prix=<?php echo $donnees['prix_par_jour'];?>&
                                    classe=<?php echo $donnees['classe_vtr']; ?>&
                                    couleur=<?php echo $donnees['couleur_vtr']; ?>&
                                    porte=<?php echo $donnees['nbr_portes'];?>&
                                    car=<?php echo $donnees['carburant']; ?>&
                                    bv=<?php echo $donnees['boite_vitesse']; ?>&
                                    annee=<?php echo $donnees['annee']; ?>&
                                    photo=<?php echo $donnees['photo']; ?>"
                                    class="btn " id="reserver">+ de détails</a>
                                </div>
                               
                                <a href="reserver.php?immtV=<?php echo $donnees['imt_vtr'];   ?>"
                                    class="btn btn-primary" id="reserver">réserver</a>

                            </div>
                        </div>
                        <!-- Single Popular Car End -->
                        &nbsp;
                        <?php
                    } //fin de la boucle, le tableau contient toute la BDD
                    $requete->closeCursor(); //deconnection de mysql
                    ?>
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