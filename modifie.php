<?php 
  session_start();
?>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ajout de membre</title>

    
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <!-- Off Canvas Menu -->
    <link rel="stylesheet" type="text/css" href="assets/css/menu_sideslide.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="style1.css">

  </head>
  <body class="modifie">

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <div class="menu-wrap">
        <div class="menu navbar">
          <div class="menu-list navbar-collapse">
            <ul class="onepage-nev navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="test.php">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ajout.php">Ajouter Un Membre</a>
              </li>                            
              <li class="nav-item">
                <a class="nav-link" href="affiche.php">Voir Personnes Connectés</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="modifie.php">Modifier Votre Compte</a>
              </li>      
              <li class="nav-item">
                <a class="nav-link" href="home.php">Se Déconnecter</a>
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
            <a href="index.html" class="navbar-brand"><p style="font-size: 50px">Modification De Votre Compte</p></a>
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
<form  action="" method="POST">
   <div class="loginbox">
        <img src="images/avatar.jpg" class="avatar"></img>
      <h1>Entrer l'ancien compte</h1>
      <p>Nom</p>
      <input type="text" name="nom" placeholder="Entrer votre nom d'utilisateur " required="">
      <p>Mot de passe</p>
      <input type="password" name="pass" placeholder="Entrer votre mot de passe" required=""><br/>
      <input type="submit" name="valider" value="Modifier">
      <input type="reset" name="" value="annuler">
   </div>
</form>
<?php

     if(isset($_POST['valider'])){
      if (isset($_POST['nom']) && isset($_POST['pass'])) {
        
             
          if (($_SESSION['nom_bdd'] == $_POST['nom']) && ($_SESSION['pass_bdd'] == $_POST['pass'])) {
                header('location:confirme.php');
          }
          else{
          
            header('location:erreur.php');
          }
      }
      
 }

   ?>

      </nav>
      <!-- Navbar End -->
    </header>
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
