<?php 
  function get_accueil(){
  	global $db;
  	$req=$db->query ("
   
       SELECT * FROM accueil

       ") or die(print_r($db->errorInfo()));

  	$results = array() or die(print_r($db->errorInfo()));

  	while ($rows = $req -> fetchObject()) {
  		$results[] = $rows or die(print_r($db->errorInfo()));
  	}

  	return $results or die(print_r($db->errorInfo()));
  }
 
 ?>