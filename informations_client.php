<!-- R�cup�ration du nom et pr�nom du client selon son code_client -->
<?php
include("connexion_sql.php");
		
		$requette = $bdd -> prepare('select *from client where numcli = ?');
		$requette -> execute(array($_POST['codeClient'] ));
		$donnees = $requette -> fetch();
		header('Location: Locations.php');

		
		$requette -> closeCursor();
?>