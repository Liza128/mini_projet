<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>Ajouter voiture</title>

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
    <link href="assets/css/insc.css" rel="stylesheet">


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
                            <a href="#"><i class="fa fa-behance"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
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
                        <a href="espace_admin.php" class="logo">
                            <!-- <img src="assets/img/logo.png" alt="JSOFT"> -->
                        <h3 style="color:white"> SamLocation.com</h3>
                        </a>
                    </div>
                    <!--== Logo End ==-->
                    <style>
#page-title-area{
    background-image: url(assets/img/slider-img/slider-img-4.jpg);
}


</style>
                    <!--== Main Menu Start ==-->
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu alignright">

                            <ul>
                                <li><a href="espace_admin.php">Accueil</a>

                                </li>
                               
                                <li  class="active"><a href="voitures.php"> Voitures</a></li>


                                </li>

                              


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
<style>
    .error-message{
    background:url("../images/error.png") 10px center no-repeat;
    padding: 0 0 0 30px;
    display: inline;
    color: #e50000;
    display: none;
    font-size: 20px;
}
</style>
    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center" style="color: white;background-color: #8080803d">
                        <h2 style="color:#ffd000; text-shadow: 2px 2px red;">Ajouter une voiture</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p></p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->
    <script src="assets/js/jquery-3.3.1.js"></script>
    <script type="text/javascript">
        $(function(){
            $("#envoyer").click(function(){
                valid=true;
                if($("#immtV").val() == ""){
                    $("#immtV").next(".error-message").fadeIn().text("Veuillez entrer le numero du matricule");
                    $("#immtV").css("border-color","#ff0000");
                    valid=false;}
                // }else if(!$("#username").val().match(/^[a-z]+$/i)){
                //  $("#username").next(".error-message").fadeIn().text("Veuillez entrer un nom d'utilisateur valide");
                //  $("#username").css("border-color","#ff0000");
                //  valid=false;
                // }
                
                else{
                 $("#immtV").next(".error-message").fadeOut();
                 $("#immtV").css("border-color","#00ff00");
                }
 
                if($("#classeV").val() == ""){
                    $("#classeV").next(".error-message").fadeIn().text("Veuillez entrer la classe  ");
                    $("#classeV").css("border-color","#ff0000");
                    valid=false;
                }
 
                else{
                 $("#typeV").next(".error-message").fadeOut();
                 $("#typeV").css("border-color","#00ff00");
                }

                
                if($("#modeleV").val() == ""){
                    $("#modeleV").next(".error-message").fadeIn().text("Veuillez entrer le modele  ");
                    $("#modeleV").css("border-color","#ff0000");
                    valid=false;
                }
 
                else{
                 $("#modeleV").next(".error-message").fadeOut();
                 $("#modeleV").css("border-color","#00ff00");
                }
                
                if($("#marqueV").val() == ""){
                    $("#marqueV").next(".error-message").fadeIn().text("Veuillez entrer la marque  ");
                    $("#marqueV").css("border-color","#ff0000");
                    valid=false;
                }
 
                else{
                 $("#marqueV").next(".error-message").fadeOut();
                 $("#marqueV").css("border-color","#00ff00");
                }
                
                if($("#couleurV").val() == ""){
                    $("#couleurV").next(".error-message").fadeIn().text("Veuillez entrer la couleur  ");
                    $("#couleurV").css("border-color","#ff0000");
                    valid=false;
                }
                
 
                else{
                 $("#couleurV").next(".error-message").fadeOut();
                 $("#couleurV").css("border-color","#00ff00");
                }
                
                if($("#photo").val() == ""){
                    $("#photo").next(".error-message").fadeIn().text("Veuillez choisir une photo  ");
                    $("#photo").css("border-color","#ff0000");
                    valid=false;
                }
 
                else{
                 $("#photo").next(".error-message").fadeOut();
                 $("#photo").css("border-color","#00ff00");
                }

                 if($("#carburantV").val() == ""){
                    $("#carburantV").next(".error-message").fadeIn().text("Veuillez entrer le type du carburant ");
                    $("#carburantV").css("border-color","#ff0000");
                    valid=false;
                }
 
                else{
                 $("#carburantV").next(".error-message").fadeOut();
                 $("#carburantV").css("border-color","#00ff00");
                }

                if($("#nbr_portes").val() == ""){
                    $("#nbr_portes").next(".error-message").fadeIn().text("Veuillez entrer le nombre de portes  ");
                    $("#nbr_portes").css("border-color","#ff0000");
                    valid=false;
                }
                
 
                else{
                 $("#nbr_portes").next(".error-message").fadeOut();
                 $("#nbr_portes").css("border-color","#00ff00");
                }

                if($("#boite_vitesse").val() == ""){
                    $("#boite_vitesse").next(".error-message").fadeIn().text("Veuillez entrer le nombre le type de la boite a vitesse  ");
                    $("#boite_vitesse").css("border-color","#ff0000");
                    valid=false;
                }
                
 
                else{
                 $("#boite_vitesse").next(".error-message").fadeOut();
                 $("#boite_vitesse").css("border-color","#00ff00");
                }
//////////
                if($("#annee").val() == ""){
                    $("#annee").next(".error-message").fadeIn().text("Veuillez entrer l'annee  ");
                    $("#annee").css("border-color","#ff0000");
                    valid=false;
                }
                
 
                else{
                 $("#annee").next(".error-message").fadeOut();
                 $("#annee").css("border-color","#00ff00");
                }

                
                if($("#prixV").val() == ""){
                    $("#prixV").next(".error-message").fadeIn().text("Veuillez entrer le prix  ");
                    $("#prixV").css("border-color","#ff0000");
                    valid=false;
                }
                else if(!$("#prixV").val().match(/^[0-9]+$/i)){
                 $("#prixV").next(".error-message").fadeIn().text("Veuillez entrer un prix de location valide ");
                 $("#prixV").css("border-color","#ff0000");
                 valid=false;
                }
                else{
                 $("#prixV").next(".error-message").fadeOut();
                 $("#prixV").css("border-color","#00ff00");
                }
                return valid;
            });
 
            
        });
    </script>
    <!--== Contact Page Area Start ==-->
    
    <div class="container">
        
    <div class="row" style="margin: 20px;">

        <div class="col-md-7 col-md-offset-3 cont" style="background-color:#c3c0b738;padding: 30px;margin-left: 150px" >
         <h2 class="title">ajouter une voiture</h2>
         <div class="barre" style="margin-bottom: 50px;"></div>
          <form  method="post" action="insertVoiture.php" enctype="multipart/form-data">

              <div class="row">
              <label for="immtV">Immatricule :</label>
              <input type="text" name="immtV" id="immtV" placeholder="Tapez l'immatricule" class="ch">
              <span class="error-message">Erreur</span>
              </div>

              <div class="row">
              <label for="classeV">Classe :</label>
                 <input type="text" name="classeV" id="classeV" placeholder="Tapez la classe" class="ch">
                 <span class="error-message">Erreur</span>

               </div>
                 
             
               <div class="row">
               <label for="marqueV">Marque :</label>
                 <input type="text" name="marqueV" id="marqueV" placeholder="Tapez la marque" class="ch">
                 <span class="error-message">Erreur</span>
               </div>
               <div class="row">
               <label for="modeleV">Modele :</label>
                 <input type="text" name="modeleV" id="modeleV" placeholder="Tapez le modele" class="ch">
                 <span class="error-message">Erreur</span>
               </div>

               <div class="row">
               <label for="prixV">Prix :</label>
                 <input type="text" name="prixV" id="prixV" placeholder="prix de location " class="ch">
                 <span class="error-message">Erreur</span>
               </div>

               <div class="row">
               <label for="couleurV">Couleur :</label>
                 <input type="text" name="couleurV" id="couleurV" placeholder="la couleur " class="ch">
                 <span class="error-message">Erreur</span>
               </div>

               <div class="row">
               <label for="nbr_portesV">Nombre de portes :</label>
                 <input type="number" name="nbr_portesV" id="nbr_portes" placeholder="Nombre de portes " class="ch" max="7" min="2">
                 <span class="error-message">Erreur</span>
               </div>

               <div class="row">
               <label for="carburantV">Carburant :</label>
                 <input type="text" name="carburantV" id="carburantV" placeholder="Carburant " class="ch">
                 <span class="error-message">Erreur</span>
               </div>
               
               <div class="row">
               <label for="boite_vitesseV">Boite a vistesse :</label>
                 <input type="text" name="boite_vitesseV" id="boite_vitesse" placeholder="boite a vitesse " class="ch">
                 <span class="error-message">Erreur</span>
               </div>

               <div class="row">
               <label for="anneeV">Annee:</label>
                 <input type="number" name="anneeV" id="annee" placeholder="l'annee " class="ch" min="1980" max="3000">
                 <span class="error-message">Erreur</span>
               </div>

               
               <div class="row" style="margin: 30px">
               <label for="photo"> <span class="fa fa-camera" style="font-size: 20px"></span> Photo :</label>
                 <input type="file" name="photo" id="photo">
                 <span class="error-message">Erreur</span>
               </div>
               
               <div class="row">
                 <div class="col-md-5 col-md-offset-3">
                 <input type="submit" name="envoyer" id="envoyer" value="Envoyer" class="ch1" style=" margin-left: 150px;">
                  </div>
                </div>
          </form>
        </div>
       </div>
       </div>
    </div>                     
                           

                            
    <!--== Contact Page Area End ==-->

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