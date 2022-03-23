<?php 
		include("connexion_sql.php");
		
		$requette = $bdd ->query('select MAX(numcli) as code_client from client');
	    $requette -> execute(array());
		$donnees = $requette -> fetch();
		
	?>
	
	<script type="text/jscript">alert ('Votre code client est: <?php echo $donnees['code_client']; ?> '); </script>
	
	<?php
	$requette -> closeCursor();
?>
