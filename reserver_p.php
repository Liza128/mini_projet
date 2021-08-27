<?php
 session_start();
 require_once("connexion.php");

$requeteV="select * from voiture ";
$resultatV =$pdo->query($requeteV);

?>



<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>reservation voiture</title>

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
    <script type="text/javascript">
        $(function(){
            $("#envoyer").click(function(){
                valid=true;
                if($("#immtV").val() == ""){
                    $("#immtV").next(".error-message").fadeIn().text("Veuillez choisir une voiture");
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
                if($("#dateD").val() == ""){
                    $("#dateD").next(".error-message").fadeIn().text("Veuillez choisir une date de debut de la reservation");
                    $("#dateD").css("border-color","#ff0000");
                    valid=false;}
              
                    else{
                 $("#dateD").next(".error-message").fadeOut();
                 $("#dateD").css("border-color","#00ff00");
                }


                if($("#dureeR").val() == ""){
                    $("#dureeR").next(".error-message").fadeIn().text("Veuillez choisir une duree de reservation");
                    $("#dureeR").css("border-color","#ff0000");
                    valid=false;}
                //  else if(!$("#dureeR").val().match(/^[0-9]+$/i) ||!$("#dureeR").val()>0 || !$("#dureeR").val() >30 ){
                //  $("#dureeR").next(".error-message").fadeIn().text("Veuillez entrer une duree de reservation valide");
                //  $("#dureeR").css("border-color","#ff0000");
                //  valid=false;
                
                
                else{
                 $("#dureeR").next(".error-message").fadeOut();
                 $("#dureeR").css("border-color","#00ff00");
                }


                return valid;

});


});
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
                        <h2 style="color:#ffd000; text-shadow: 2px 2px red;">réserver maintenant!</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Pour réserver, il vous suffit de remplir le formulaire de réservation.</br>
                Choisissez le modèle de voiture que vous souhaitez louer et la période de location.</p>
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
                <div class="col-md-10 m-auto">


                <form id="login-form" class="form" action="reserver_form.php" method="GET" style="width: 90%;" onsubmit="return verifReservation(this)">
            <div style="padding: 50px; ">

                <div style=" background-color: #fd6522; color: #fff; border-radius: 15px;">

                    <div class="form-header">
                        <h1 style="  color: #fff; padding-top:20px" align="center">Effectuer votre réservation</h1>
                    </div>
                    <div style="margin-bottom: 20px; padding: 40px;">
                        
                        </div>
                        <div class="champs">
                            <label class="form-label" for="immtV"style="font-weight:bold;font-size:20px;padding-top:15px;padding-left:10px">choisir une voiture</label>
                            <select class="form-control" required style="border-radius: 40px; height: 60px;"
                            name="voiturechoisie" id="immtV">
                                <?php while($voiture=$resultatV->fetch()){  ?>
                                <option value="<?php echo $voiture['imt_vtr'];   ?>">
                                    <?php echo $voiture['mrq_vtr'];   ?>&nbsp;
                                    <?php  echo $voiture['modele_vtr'];
                          ?>

                                </option>


                                <?php }  ?>


                            </select>

                            
                            <div style="margin-bottom: 30px;">
                                <label class="form-label" for="dateD"style="font-weight:bold;font-size:20px;padding-top:15px;padding-left:10px">Date debut location</label>
                                <input type="date" name="date_debut_res" id="dateD" class="form-control" required
                                    style="border-radius: 40px; height: 60px;" min=<?php
         echo date('Y-m-d',strtotime('+1 days'));?> max= <?php  echo date('Y-m-d',strtotime('+120 days'));?>>
                                   

                            </div>

                        </div>
                        <p class="champs">
                            <label for="dureeR">
                                <span class="form-label"style="font-weight:bold;font-size:20px;padding-top:15px;padding-left:10px" onblur="verifDuree(this)"> duree de reservation (En jours )</span></label><br />
                                <input type="number" min="1" max="31" step="1" style="border-radius: 40px; height: 60px; "
                                class="form-control" name="duree_res" required id="dureeR" placeholder="Le nombre de jours ">

                        </p></br></br>
                        <div>
                            <input type="submit" value="Envoyer" name="submit"  class=" btn" style=" color: #fff; background-color: #0051ff;font-weight: 700;height: 60px;padding: 10px 30px;width:100%;border-radius: 40px;border: none;text-transform: uppercase;font-size: 16px;letter-spacing: 1.3px;">
                        </div>
                    </div>
                </div>
            </div>

        </form>





                </div>
            </div>
        </div>
        <div class="liste-sous-form">
            <ul style="color:red;">
                <li>
                    <h5>La réservation doit être effectuée 24h à l'avance minimum</h5>
                </li>
                <li>
                    <h5>Cette réservation ne sera confirmée qu'après validation de notre équipe commerciale, selon la
                        disponibilité du véhicule sélectionné.</h5>
                </li>
               
            </ul>
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