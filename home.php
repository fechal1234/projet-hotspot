<?php  
  session_start();
  $_SESSION['nom_bdd'];
  $_SESSION['nom_mem_bdd'];
  $_SESSION['pass_bdd'];
  $_SESSION['pass_mem_bdd'];
?>
<?php
 $host='localhost';
 $user='root';
 $password='';
 $bdd='routeur';
 try{

     $bdd = new PDO('mysql:host='.$host.';dbname='.$bdd,$user,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8', PDO::ATTR_ERRMODE => 'ERRMODE_WARNING'));

    }catch(PDOexception $e){
      die("une erreur est survenue lors de la connexion a la base de données ");
    }
  $reponse = $bdd->query('SELECT * FROM accueil');
  $results = array();
  while($données = $reponse -> fetch()){
    $results[] = $données;
    $id_bdd=$données['id'];
    $_SESSION['nom_bdd']=$données['nom'];
    $_SESSION['pass_bdd']=$données['mot_de_passe'];

  }
  $cpt=0;
  $reponse = $bdd->query('SELECT * FROM accueil_mem');
  $results = array();
  while($données = $reponse -> fetch()){
    $resultNom[] = $données['nom_mem'];
    $resultPass[] = $données['mot_de_passe_mem'];
    $resultId[] = $données['id_mem'];
    $id_mem_bdd=$données['id_mem'];
    $cpt=$cpt+1;
    $_SESSION['pass_mem_bdd']=$données['mot_de_passe_mem'];

  }

?>



<html>
   <head>
     <title>Acceuil</title>
	 <link rel ="stylesheet" href="style.css"/>
   </head>
   <body>
   <form  action="" method="POST">
   <div class="loginbox">
    <img src="images/avatar.jpg" class="avatar"></img>
	<h1>Authentification</h1>
	<p>Nom</p>
	<input type="text" name="nom" placeholder="Entrer votre nom d'utilisateur " required="">
	<p>Mot de passe</p>
	<input type="password" name="pass" placeholder="Entrer votre mot de passe" required=""><br/>
	<input type="submit" name="valider" value="connexion">
	<input type="reset" name="" value="annuler">
   </div>
   </form>

   
   <?php
     $temp="value";
     $i=0;
     
     if(isset($_POST['valider'])){
      if (isset($_POST['nom']) && isset($_POST['pass'])) {
        
             
          if (($_SESSION['nom_bdd'] == $_POST['nom']) && ($_SESSION['pass_bdd'] == $_POST['pass'])) {
                header('location:test.php');
          }
          else {
            while($i+1<$cpt){
        if (!($resultNom[$i] == $_POST['nom']) && !($resultPass[$i] == $_POST['pass'])) { 

        if($i+1>$cpt){

        header('location:erreur.php');
      } 
        
  
               
          }else if(($resultNom[$i] == $_POST['nom']) && ($resultPass[$i] == $_POST['pass'])){
          $reponse = $bdd->exec('UPDATE accueil_mem SET connecter = true WHERE nom_mem = "'.$resultNom[$i].'"');

                $temp=$_POST['nom'];
                $reponse['connecter'];
                $_SESSION['nom_mem_bdd']=$resultNom[$i];
                $_SESSION['id_mem_bdd']=$resultId[$i];

                header('location:membres.php');
                echo $temp;
            
          }
                $i++;
      }}
          
            
            
      }
      
 }

   ?>
   </body>
</html>