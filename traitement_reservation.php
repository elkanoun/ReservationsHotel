<?php
    include_once("connexion_sql.php");                              
          
    $reservation = $bdd -> prepare('insert into reservation(numcli, nbradult, nbrenf, datecre, datedeb, datefin) values(?, ?, ?, ?, ?, ?)');
	
	$reservation -> execute(array($_POST['codeClient'], 
	                 
	                           $_POST['adultes'], 
							   $_POST['enfants'],
							   DATE,
							   $_POST['datearrivee'],
							   $_POST['datedepart'] ));
							   
	header('Location: Reservations.php');

							   
							   
	   
      
?>