<?php
    include_once("connexion_sql.php");                              
	if(isset($_POST['confirmation_chambre']) && isset($_POST['confirmation_ville']) && isset($_POST['confirmation_type']) && isset($_POST['cd_client']))
	   
		{
		 //r�cup�ration de l'identifiant de la chambre
         $numcli = $_POST['cd_client'];

		 $idchambre = $bdd ->prepare('select idch from chambres where numch=? and idhot=? and numcat=?');
		 $idchambre ->execute(array(
		                              $_POST['confirmation_chambre'],
									  $_POST['confirmation_ville'],
									  $_POST['confirmation_type']));
								
		$validchambre = $idchambre -> fetch();
		$idch = $validchambre['idch'];
		
		 //r�cup�ration du num�ro de la r�servation
        $numreservation = $bdd ->prepare('select numreserv from reservation where numcli=:numcli');
	    $numreservation -> execute(array('numcli' => $numcli));
		$valnumreservation = $numreservation -> fetch();
		$numreserv = $valnumreservation['numreserv'];
		
		
         $disponibilite = $bdd ->prepare('select etatch from chambres where (idch=:idch)');
		 $disponibilite ->execute(array(
		                           'idch' => $idch));
		 $valeurdisponibilite = $disponibilite -> fetch();
		 $etatchambre = $valeurdisponibilite['etatch'];
		 
		 //message de confirmation de la r�servation;
		  if($etatchambre=='disponible'){  //nom et pr�nom client
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
		   <p>Voulez vous confirmer cette r�servation?</p>
		   <?php
		   if(isset($_POST['frites']) && isset($_POST['frites'])=='oui')
		   {
		   //on insere de la r�servation et la chambre dans la table Louer
		$insertion = $bdd ->prepare('insert into louer values(:idch, :numreserv)');
		$insertion ->execute(array(
		                          'idch' => $idch,
								   'numreserv' => $numreserv));           //MAJ de l'�tat de la r�servation en cas de confirmation
		 $confirmation = $bdd ->prepare("update reservation set etatreserv='confirm�', prixreserv=:prixreserv where numreserv=:numreserv");
		 $confirmation -> execute(array(
		                       'prixreserv' => $prixreserv,
							   'numreserv' => $numreserv));                //MAJ de l'�tat de la chambre
		$maj = $bdd ->prepare("update chambres set etatch='r�serv�' idch=:idch");
		 $maj -> execute(array(
		                       'idch' => $idch));
		 
		 echo 'votre r�servation est confirm�e';
		  }else{                                                             //MAJ de l'�tat de la r�servation en cas d'annulation
	     $annulation = $bdd ->prepare("update reservation set etatreserv='annul�' where numreserv=:numreserv");
		 $annulation -> execute(array('numreserv' => $numreserv));
		 
		 echo 'votre r�servation est annul�e';
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
				<p>Cette chambre est r�serv�e</p>
				<?php
				}
		 
		 }else{
		 }
		 
		 ?>