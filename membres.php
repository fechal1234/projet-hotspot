<?php 
  session_start();
?>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>membres</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <!-- Off Canvas Menu -->
    <link rel="stylesheet" type="text/css" href="assets/css/menu_sideslide.css">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

  </head>
  <body class="compte">

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <div class="menu-wrap">
        <div class="menu navbar">
          <div class="menu-list navbar-collapse">
            <ul class="onepage-nev navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="membres.php">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="deconnexion.php">Se Déconnecter</a>
              </li>   
            </ul>
          </div>
        </div> 
        <button class="close-button" id="close-button"><i class="lni-close"></i></button>
      </div>  
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar menu-bg">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="lni-menu"></span>
              <span class="lni-menu"></span>
              <span class="lni-menu"></span>
            </button>
            <a href="membres.php" class="navbar-brand"><p style="font-size: 50px">MEMBRES</p></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item" id="open-button">
                <a class="nav-link">
                  <i class="lni-menu"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </nav>
      <!-- Navbar End -->
    </header>
    
    <!-- Intro Section Start -->
    <section class="intro">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="heading-count">
              <h2><?php echo 'BIENVENUE M.'.$_SESSION['nom_mem_bdd'];  ?></h2>
              <p>Vous êtes connecté</p>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row countdown justify-content-center">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Intro Section End -->

    <!-- Footer Section Start -->
    <footer class="footer-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-text text-center">
              <p>Copyright © 2018 <a href="www.uideck.com"></a>| Crafted by <a href="https://mail.google.com/mail/u/0/#inbox/gomez FELIX" target="_blank">felixgomez@gmail.com</a></p>
            </div>
          </div>
        </div>

      </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/vegas.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/menu.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>
    <script src="assets/js/map.js"></script>
    <script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM">
    </script>
      
  </body>
</html>
