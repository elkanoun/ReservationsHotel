<?php
    include_once("connexion_sql.php");                              
	if(isset($_POST['confirmation_chambre']) && isset($_POST['confirmation_ville']) && isset($_POST['confirmation_type']) && isset($_POST['cd_client']))
	   
		{
		 //récupération de l'identifiant de la chambre
         $numcli = $_POST['cd_client'];

		 $idchambre = $bdd ->prepare('select idch from chambres where numch=? and idhot=? and numcat=?');
		 $idchambre ->execute(array(
		                              $_POST['confirmation_chambre'],
									  $_POST['confirmation_ville'],
									  $_POST['confirmation_type']));
								
		$validchambre = $idchambre -> fetch();
		$idch = $validchambre['idch'];
		
		 //récupération du numéro de la réservation
        $numreservation = $bdd ->prepare('select numreserv from reservation where numcli=:numcli');
	    $numreservation -> execute(array('numcli' => $numcli));
		$valnumreservation = $numreservation -> fetch();
		$numreserv = $valnumreservation['numreserv'];
		
		
         $disponibilite = $bdd ->prepare('select etatch from chambres where (idch=:idch)');
		 $disponibilite ->execute(array(
		                           'idch' => $idch));
		 $valeurdisponibilite = $disponibilite -> fetch();
		 $etatchambre = $valeurdisponibilite['etatch'];
		 
		 //message de confirmation de la réservation;
		  if($etatchambre=='disponible'){  //nom et prénom client
		  $informations = $bdd ->prepare('select nomcli, prenomcli from client where (numcli=:numcli)');
		  $informations ->execute(array(
		                                 'numcli' => $numcli));
		   $donnees = $informations -> fetch();
		   ?>
		   <p><?php echo $donnees['nomcli']; ?>.<?php echo $donnees['prenomcli']; ?>
			</p>
		   <p>Votre chambre choisie est:</p>
		   <div>
		   <img src="images/<?php  //chambre choisie
		   $type =$bdd ->prepare('select *from categories where numcat=?');
		   $type->execute(array(
		                        $_POST['confirmation_type']));
			
			$valeurtype = $type -> fetch();
			$prixreserv=$valeurtype['prixcat'];
			
			echo $valeurtype['libellecat']; ?>/<?php echo $_POST['confirmation_chambre']; ?>.".jpeg"/>
		   </div>
		   <p>Voulez vous confirmer cette réservation?</p>
		   <?php
		   if(isset($_POST['frites']) && isset($_POST['frites'])=='oui')
		   {
		   //on insere de la réservation et la chambre dans la table Louer
		$insertion = $bdd ->prepare('insert into louer values(:idch, :numreserv)');
		$insertion ->execute(array(
		                          'idch' => $idch,
								   'numreserv' => $numreserv));           //MAJ de l'état de la réservation en cas de confirmation
		 $confirmation = $bdd ->prepare("update reservation set etatreserv='confirmé', prixreserv=:prixreserv where numreserv=:numreserv");
		 $confirmation -> execute(array(
		                       'prixreserv' => $prixreserv,
							   'numreserv' => $numreserv));                //MAJ de l'état de la chambre
		$maj = $bdd ->prepare("update chambres set etatch='réservé' idch=:idch");
		 $maj -> execute(array(
		                       'idch' => $idch));
		 
		 echo 'votre réservation est confirmée';
		  }else{                                                             //MAJ de l'état de la réservation en cas d'annulation
	     $annulation = $bdd ->prepare("update reservation set etatreserv='annulé' where numreserv=:numreserv");
		 $annulation -> execute(array('numreserv' => $numreserv));
		 
		 echo 'votre réservation est annulée';
		 }
		   ?>
		   <form name="confirmation" id="confirmation" action="">
<input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
<input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label>
<input type="submit" value="confirmer"/>
           </form>

		   <?php
		   }else{
		        ?>
				<p>Cette chambre est réservée</p>
				<?php
				}
		 
		 }else{
		 }
		 
		 ?>