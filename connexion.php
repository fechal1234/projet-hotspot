<?php
function seConnecter(){ 
 $dbhost='localhost';
 $dbname='routeur';
 $dbuser='root';
 $dbpassword='';


   try{

     $db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpassword,array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8', PDO::ATTR_ERRMODE => 'ERRMODE_WARNING'));

    }catch(PDOexception $e){
    	die("une erreur est survenue lors de la connexion a la base de données ");
    }


  }
?>