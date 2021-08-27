<?php
   session_start();

         
         
         //recuperer les valeurs du formulaire
 
  
     // $requeteCount="select count(*) countV from voiture where (mrq_vtr like '%$mqmd%' or modele_vtr like '%$mqmd%') and type_vtr='$type'";










//requête SQL:
 





?>




<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Condition de locations</title>

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
    background-image: url(assets/img/slider-img/slider-img-2.jpg);
    

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
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2 style="color:#ffd000; text-shadow: 2px 2px red;">conditions de locations</h2>
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
            <div align="left" style=" font-weight:lighter; ">
                <h1 style="color:red; font-size:40px; font-weight:bold ">Conditions de Location</h1>
                <ol align="left" style="color:black; font-size:25px;font-weight:bold ">
                    <li>Le conducteur doit être âgé de vingt cinq (25) ans au minimum et de soixante quinze (75) ans au
                        maximum .</li>
                    <li> Le client doit être titulaire d’un permis de conduite en cours de validité, émis depuis de deux
                        (2) ans et sans restriction . </li>
                    <li> Le permis doit être présente obligatoirement lors de l’établissement du contrat de location.
                    </li>
                    <li>Le client doit être dans la mesure de nous fournir une pièce d’identité valide (passeport).</li>
                    <li>La personne signataire du contrat de location est la seule personne autorisée à conduire le
                        véhicule. </li>
                    <li>La durée de location est calculée par tranche de 24 heures, non divisibles, à raison de 300
                        kilomètres par jour.</li>
                    <li>Un passeport et une caution allant de 20 000 DA a 40 000 DA selon la catégorie du véhicule ,
                        seront réclamés et restitues au retour du véhicule, sous réserve du respect des conditions
                        générales de location.</li>
                    <li>Le paiement est exige d’avance au moment de la livraison du véhicule en espèces ou cheque
                        certifie (Dinars Algérien).</li>
                    <li>Le carburant est a la charge du client .Une justification de domicile sera exigée.</li>
                    <li>Le client est responsable de son véhicule sur route comme en stationnement.</li>
                    <li>Les effets personnels ne sont pas couverts.</li>
                    <li>Les dégâts causes au véhicule ne sont couverts que sur production d’un constat d’accident dans
                        les 24 heures.</li>
                    <li>Le vol ou la dégradation du véhicule doivent faire l’objet d’une déclaration auprès des services
                        de police ou de la gendarmerie.</li>
                    <li>Les dégâts aux jantes et pneumatiques, le roulage a plat des pneumatiques, la détérioration, les
                        vols, les pillages d’accessoires, les actes de vandalisme ,les dégâts mécaniques dus a une
                        mauvaise utilisation du véhicule ,les procès verbaux ,les dégâts survenus en dessous du véhicule
                        (jupe, bas de caisse ,carter d’huile, échappement) et les dommages causes par les troubles et
                        émeutes seront factures au client</li>
                    <li>Tout prolongement de la durée de location doit être notifie quarante huit (48) heures à
                        l’avance.</li>
                </ol>

                </ol>
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