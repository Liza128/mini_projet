<?php
require_once('connexion.php');

$requete="select * from voiture";
$requeteCount="SELECT count(*) countV from voiture";
$resultatV=$pdo->query($requete);
$resultatCount=$pdo->query($requeteCount);
$tabCount=$resultatCount->fetch();
$nbrVoitures=$tabCount['countV'];

?>



<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Voitures</title>

   
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
     <!--=== Bootstrap CSS ===-->
     <link href="assets/css/bootstrap.min.css" rel="stylesheet">
     <!--=== Bootstrap CSS ===-->
     <!-- <link href="assets/css/bootstrap.min3.css" rel="stylesheet"> -->
    <style>
       
        .t{
            /* text-align: center; */
            /* font-size: large; */
        }
        th{
            font-size: large;
            text-align: center;
            font-weight: bold;
            color:black ;
            background-color: #ffd000;
        }
        
    </style>
    <style>
#page-title-area{
    background-image: url(assets/img/article/arti-thumb-1.jpg);
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
                                <li><a href="espace_admin.php">Accueil</a>

                                </li>
                                
                                <li class="active"><a href="voitures.php"> Voitures</a></li>


                                

                               

                                <li><a href="deconnexion.php">Déconnexion</a> </li>
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
                    <div class="section-title  text-center" style="color: #fff;background-color: #8080803d">
                        <h2 style="color:#ffd000; text-shadow: 2px 2px red;">Gestion Voitures</h2>
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
    </br>
    </br>

    <section>
        <div class="container">
            <div class="row">

                <div class="row" style="background-color:#fff;padding-top:40px;">
                    
                <div class="card border-primary">
             <div class="card-header bg-primary text-white">
                  <span style="font-size: x-large"> Listes des voitures (<?php  echo $nbrVoitures; ?> Voitures)</span> 
                  <a href="ajouterVoiture.php" style="color: greenyellow; font-size: x-large" class="pull-right lien"><span class="fa fa-plus">&nbsp;Nouvelle voiture</span></a>
             </div>
             <div class="card-body">
                 <table class="table table-striped table-bordered" >
                     <thead>
                         <tr>
                             <th>Immt</th>
                             <th>Classe</th>
                             <th>Marque</th>
                             <th>Modèle</th>
                             <th>Couleur</th>
                             <th>Prix de location</th>
                             <th>nbr de portes</th>
                             <th>année</th>
                             <th>carburant</th>
                             <th>boite de vitesse</th>
                             <th>Photo</th>
                           
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
            
                         <?php  
                              while ($voiture=$resultatV->fetch()) {  ?>
                               <tr> <td class="t"><?php  echo $voiture['imt_vtr'] ; ?></td>
                                <td class="t"><?php  echo $voiture['classe_vtr'] ; ?></td>
                                <td class="t"><?php echo $voiture['mrq_vtr']  ;?></td>
                                <td class="t"><?php echo $voiture['modele_vtr']  ;?></td>
                                <td class="t"><?php echo $voiture['couleur_vtr']  ;?></td>
                                <td class="t"><?php echo $voiture['prix_par_jour']  ;?></td>
                                <td class="t"><?php echo $voiture['nbr_portes']  ;?></td>
                                <td class="t"><?php echo $voiture['annee']  ;?></td>
                                <td class="t"><?php echo $voiture['carburant']  ;?></td>
                                <td class="t"><?php echo $voiture['boite_vitesse']  ;?></td>
                                <td class="t"><img src="./assets/img/voitures/<?php echo $voiture['photo'] ; ?>" alt="voiture" height="100px" width="170px" class="img-rounded"></td>

                               
                            </tr>

                            <?php  }  ?>
                            
                     </tbody>
                 </table>
             </div>
         </div>
                     
             </div>
         </div>






        </div>

    </section>
    </br>
    </br>





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