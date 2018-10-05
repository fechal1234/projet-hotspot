<?php  
  session_start();
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

?>


<?php

 $reponse = $bdd->exec('UPDATE accueil_mem SET connecter = false WHERE  id_mem = '.$_SESSION['id_mem_bdd'].'');



header('Location:home.php');


?>
