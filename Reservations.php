<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
</head>

<body>
<?php
   include_once("header.php");
?>
<?php
   include_once("menu.php");
?>

<section>

<!--formulaire de réservation -->
<div class="form_recherche">
	<form name="form_recherche" class="form_recherche" method="post" action="traitement_reservation.php">
	<table>
	<tr><td><img src="images/logos_icons/rechercher.png"/></td><td><p> Trouvez les meilleures offres chez ENNAKHLA </p></td></tr>
	</table> 
	     
		 <label for="villeHotel"> Ville de l'hotel voulu: </label></br>
	    <input type="text" name="villeHotel" id="villeHotel" value="<?php 
	if(isset($_POST['confirmation_ville']))
	{
      echo $_POST['confirmation_ville'];
    }else{
	  echo 'il faut confirmer votre ville';

    } 
?>"/></br>
		 
		 <label for="typeChambre"> Type de chambre voulu:</label></br>
	    <input type="text" name="type Chambre" id="type Chambre" value="<?php 
	if(isset($_POST['confirmation_type']))
	{
      echo $_POST['confirmation_type'];
    }else{
	  echo 'il faut confirmer votre type';

    } ?>"/></br>
        <table>
		<tr>
		<td>
		 <label for="codeClient"> Entrer votre code client: </label></br>
	    <input type="text" name="codeClient" id="codeClient"/></br>
	
		</td>
		</tr>
		</table>
		<table>
		<tr>
		 <!-- P:1°calendrier -->
		<td>
		Du:
        <?php
	    include("calendrier.php");
	    ?>
		</td>
		<td></td>
	   <!-- P: 2°calendrier -->
	   <td>
        Au:
	   <?php
	     include("calendrier2.php");
	   ?>
	   </td>
	   </tr>
	   </table>
		
		  <table>
		  <tr>
			 <td><label for="chambres"> Chambres </label><input type = "number" name="chambres" maxlength=36/></td>
			 <td><label for="adultes">Adultes</label><input type = "number" name="adultes" maxlength=10/></td>
			 <td><label for="enfants">Enfants</label><input type = "number" name="enfants" maxlength=10/></td>
          </tr>
		  </table>
		  
		  
		
		<br /><p><input type="submit" name ="submitted" value="Valider"/></p>
		</form>
		
	</div>
	<?php
   include_once("traitement_disponiblite_chambre.php");
?>
</section>


 <!-- the footer -->  
<?php
   include_once("footer.php");
?>
</body>
</html>
