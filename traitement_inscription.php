<?php
    include_once("connexion_sql.php");
      
    $requette = $bdd -> prepare('insert into client(nomcli, prenomcli, cincli, payscl, adressecli, telcli, mailcli) values(?, ?, ?, ?, ?, ?, ?)');
	
	$requette -> execute(array($_POST['nom'], 
	                           $_POST['prenom'], 
	                            $_POST['cin'], 
							   $_POST['pays'],
							   $_POST['adresse'],
							   $_POST['tel'],
							   $_POST['mail'] ));
							   
							   header('Location: Locations.php');
	
?>   	