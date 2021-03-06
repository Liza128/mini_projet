
<!DOCTYPE html>
<html class="no-js" lang="zxx">



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <title>inscription</title>

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
    background-image: url(assets/img/funfact-bg.jpg);
    

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
                        <i class="fa fa-map-marker"></i> Tizi-ouzou, La Tour
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-mobile"></i> +213 58 59 00 45
                    </div>
                    <!--== Single HeaderTop End ==-->

                    <!--== Single HeaderTop Start ==-->
                    <div class="col-lg-3 text-center">
                        <i class="fa fa-clock-o"></i> ouvert de 8:00 ?? 17:00
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
                                <li><a href="index.php">Accueil</a>

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
    <!--== Header Area End ==-->

    <!--== Page Title Area Start ==-->
    <section id="page-title-area" class="section-padding overlay">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2 style="color:#ffd000; text-shadow: 2px 2px red;">s'inscrire</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>veuillez remplir le formulaire d'inscription.</p>
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
                <div class="col-lg-5 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                            <h3>s'inscrire</h3>
                            <form action="inscrirVisiteur.php" method="POST">
                                <div class="name">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label" for="dateD"
                                                style="font-weight:bold;font-size:15px;padding-top:1px;margin-right:120px" >Nom:</label>

                                            <input type="text" name="nom_clt" required placeholder="nom" id="nom" >
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="dateD"
                                                style="font-weight:bold;font-size:15px;padding-top:1px;margin-right:120px">Pr??nom:</label>
                                            <input type="text" name="prenom_clt"required  placeholder="prenom" id="prenom" 
                                        </div>
                                    </div>
                                </div>
                                <div class="name">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="form-label" for="dateD"
                                                style="font-weight:bold;font-size:15px;padding-top:1px;margin-right:120px">Age:</label>

                                            <input type="number" name="age_clt" required  min="25" max="60" placeholder="age" id="age">
                                        </div>
                                        <div class="col-md-6">
                                        <label class="form-label" for="dateD"
                                                style="font-weight:bold;font-size:15px;padding-top:1px;margin-right:120px">T??l??phone:</label>

                                            <input type="tel" name="tel_clt"  required  pattern="(05|06|07)([0-9]){8}" title="veuillez saisir un num algerien "  id="tel" minlength="10" maxlength="10"  placeholder="05|06|07" >
                                        </div>
                                    </div>
                                </div>
                                <div class="username">
                                <label class="form-label" for=""
                                                style="font-weight:bold;font-size:15px;padding-top:1px;margin-right:300px">Adresse:</label>

                                    <input type="text" name="adresse_clt"required  placeholder="adresse" id="adresse" >
                                </div>
                                <div class="username">
                                <label class="form-label" for="dateD"
                                                style="font-weight:bold;font-size:15px;padding-top:1px;margin-right:300px">Email:</label>

                                    <input type="email" name="email_clt"required  placeholder="Email" id="email" >
                                </div>
                                <div class="username">
                                <label class="form-label" for="dateD"
                                                style="font-weight:bold;font-size:15px;padding-top:1px;margin-right:250px">Nom utilisateur:</label>

                                    <input type="text" name="username" required placeholder="login" id="username" >
                                </div>
                                <div class="password">
                                <label class="form-label" for="dateD"
                                                style="font-weight:bold;font-size:15px;padding-top:1px;margin-right:250px" >Mot de passe:</label>

                                    <input type="password" name="mdp"  required placeholder="mot de passe" id="mdp" pattern=".{8,}"  title="8 caract??res le minimum">   
                                  <p id="message"></p>

                                </div>
                                <div class="password">
                                <label class="form-label" for="dateD"
                                                style="font-weight:bold;font-size:15px;padding-top:1px;margin-right:150px" >Confirmer le mot de passe:</label>

                                    <input type="password" name="password_clt" id="confirmPwd"   required placeholder="confirmer le mot de passe" style="color:black"  pattern=".{8,}"  title="8 caract??res le minimum">
                               

							   </div>
                                <div class="log-btn">
                                    <button type="submit"  name="envoi"><i class="fa fa-check-square"></i> inscrire</button>
                                </div>
                            </form>
                        </div>


                        <div class="create-ac">
                            <p>vous avez un compte? <a href="login_client.php">se connecter</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Login Page Content End ==-->



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