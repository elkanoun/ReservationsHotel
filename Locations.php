<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- P: l'entete du calendrier -->


<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Hotels ENNAKHLA</title>
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
	<link type="text/css" href="css/styles-types.css" rel="stylesheet"/>
	<link type="text/css" href="css/ styles-chambres.css" rel="stylesheet"/>
    <script type="text/javascript" src="js/menu.js"></script>



	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head> 

<body>
<?php
   include_once("header.php");
?>
<?php
   include_once("menu.php");
?>

		
<!--crétion du slider des types de chambres pour l'hotel-->
<div class="welcome">
<?php
if(isset($_POST['choix'])){
?>
    <p> Bienvenue à <?php echo $_POST['choix']; ?> chez <span>ENNAKHLA.</span> </p>
<?php
}else{

}
?>


</div>
<!--formulaire d'inscreption du client-->

<section>
<p> Veuillez choisissez votre type de chambre préfèré </p>

<?php
   include_once("form_client.php");
?>

</section>

<section id="content">
				<ul class="column">
				    <!--eqblock-->
				    <li>
				        <section class="block">
						            <p>Standard-single</p> 
									<a href="#types" id="slider"><img src="images/standard-single/1.jpeg" alt=""  /></a>
							        <p> chambre normal pour un personne </p> 
								    <p> 300 DH</p> 


						</section>
				    </li>

				    <!--eqblock-->
				    <li>
				        <section class="block">
						            <p>Standard-double</p> 
									<a href="#types" id="slider"><img src="images/standard-double/1.jpg" alt=""  />	</a>
									<p> chambre normal pour deux personnes </p> 
								    <p> 500 DH</p> 
			        
						</section>
				    </li>
..
				    <!--eqblock-->
				    <li>
				        <section class="block">
						            <p>Suite-1personne</p> 
									<a href="#types" id="slider"><img src="images/suite-1personne/1.jpg" alt=""  />	</a>
									<p> chambre luxe pour un personne </p> 
								    <p> 600 DH</p> 
			        
						</section>
				    </li>

				    <!--eqblock-->
				    <li>
				        <section class="block">
						            <p>Suite-2personnes</p> 
									<a href="#types" id="slider"><img src="images/suite-2personnes/1.jpg" alt=""  />	</a>
									<p> chambre luxe pour deux personnes </p> 
								    <p> 1000 DH</p> 
			        
						</section>
				    </li>

				    <!--eqblock-->
				    <li>
				        <section class="block">
						            <p>Suite-3personnes</p> 
									<a href="#types" id="slider"><img src="images/suite-3personnes/1.jpg" alt=""  /></a>
									<p> chambre luxe pour troix personnes </p> 
								    <p> 1500 DH</p> 
				        
						</section>
				    </li>

				    <!--eqblock-->
				    <li>
				        <section class="block">
						            <p>Suite-4personnes</p> 
									  <a href="#types" id="slider"><img src="images/suite-4personnes/1.jpg" alt=""  />	</a>
									  <p> chambre luxe pour quatre personnes </p> 
								      <p> 2000 DH</p> 
			        
						</section>
				    </li> 
				</ul>
</section>

<!-- confirmation du type choisie et de la chambre aussi -->
<section>
    <form name="types" id="types" method="post" action="">
	
    <p> Veuillez choisir votre type de chambre </p>
    <select name="choix_types" id="choix_types">
    <OPTION VALUE="undefined"><SELECTED>Choisir</SELECTED></OPTION>     
	<option value="Standard-single">Standard-single</option>
    <option value="Standard-double">Standard-double</option>
    <option value="Suite-1personne">Suite-1personne</option>
	<option value="Suite-2personnes">Suite-2personnes</option>
    <option value="Suite-3personnes">Suite-3personnes</option>
    <option value="Suite-4personnes">Suite-4personnes</option>
	</select>
	<a href=".confirmation_selections"><input type="submit" value="OK"/></a>
	</form>
</section>

   
<section id="content2">
   <p align="right"> Veuillez choisir votre chambre souhaité </em></em> </p>
            <ul class="column2">
				    <!--eqblock-->
				    <li>
				        <section class="block2">
						            <p> chambre N° 1 </p>
									<a href="#confirmation_selections"><img src="images/<?php 
	if(isset($_POST['choix_types']))
	{
      echo $_POST['choix_types'];
    }else{
	  echo 'equipements';

    } 
?>/1.jpg" alt=""  /></a>
					    </section>
				    </li>

				    <!--eqblock-->
				    <li>
				        <section class="block2">
						            <section class="block">
									<p> chambre N° 2 </p>
                                    <a href="#confirmation_selections"><img src="images/<?php 
	if(isset($_POST['choix_types']))
	{
      echo $_POST['choix_types'];
    }else{
	  echo 'equipements';

    } 
?>/2.jpg" alt=""  /></a>
					                </section>
			        
						</section>
				    </li>

				    <!--eqblock-->
				    <li>
				        <section class="block2">
						            <section class="block">
				                     <p> chambre N° 3 </p>
                                    <a href="#confirmation_selections"><img src="images/<?php 
	if(isset($_POST['choix_types']))
	{
      echo $_POST['choix_types'];
    }else{
	  echo 'equipements';

    } 
?>/3.jpg" alt=""  /></a>
					                </section>
						</section>
				    </li>

				    <!--eqblock-->
				    <li>
				        <section class="block2">
						            <section class=".block">
									<p> chambre N° 4 </p>
                                    <a href="#confirmation_selections"><img src="images/<?php 
	if(isset($_POST['choix_types']))
	{
      echo $_POST['choix_types'];
    }else{
	  echo 'equipements';

    } 
?>/4.jpg" alt=""  /></a>
					    </section>> 
			        
						</section>
				    </li>

				    <!--eqblock-->
				    <li>
				        <section class="block2">
						            <section class="block">
									 <p> chambre N° 5 </p>
                                    <a href="#confirmation_selections"><img src="images/<?php 
	if(isset($_POST['choix_types']))
	{
      echo $_POST['choix_types'];
    }else{
	  echo 'equipements';

    } 
?>/5.jpg" alt=""  /></a>
					                </section> 
				        
						</section>
				    </li>

				    <!--eqblock-->
				    <li>
				        <section class="block2">
						            <section class="block">
					                <p> chambre N° 6 </p>
                                    <a href="#confirmation_selections"><img src="images/<?php 
	if(isset($_POST['choix_types']))
	{
      echo $_POST['choix_types'];
    }else{
	  echo 'Standard-single';

    } 
?>/6.jpg" alt=""  /></a>
					    </section>
						</section>
				    </li> 
				</ul>
</section>

<section>
<form name="confirmation_selections" id="confirmation_selections" method="post" action="Reservations.php">
<p> Veillez Confirmer le N° de la ville de votre Hébergement </p>
  <select name="confirmation_ville" id="confirmation_ville">
    <OPTION VALUE="undefined"><SELECTED>Choisir</SELECTED></OPTION>     
	<option value="1">rabat</option>
    <option value="2">agadir</option>
    <option value="3">casablanca</option>
	<option value="4">chfchawn</option>
    <option value="5">dakhla</option>
    <option value="6">essouira</option>
	<option value="7">ifrane</option>
	<option value="8">marrakech</option>
    <option value="9">tanger</option>
    <option value="10">meknes</option>
  </select>
	 <p> Veuillez confirmer le N° de votre type de chambre </p>
    <select name="confirmation_type" id="confirmation_type">
    <OPTION VALUE="undefined"><SELECTED>Choisir</SELECTED></OPTION>     
	<option value="1">Standard-single</option>
    <option value="2">Standard-double</option>
    <option value="3">Suite-1personne</option>
	<option value="4">Suite-2personnes</option>
    <option value="5">Suite-3personnes</option>
    <option value="6">Suite-4personnes</option>
	</select>
	<p> Veuillez confirmer Le N° de votre chambre choisie</p>
    <select name="confirmation_chambre" id="confirmation_chambre">
    <OPTION VALUE="undefined"><SELECTED>Confirmer</SELECTED></OPTION>     
	<option value="1"> chambre N° 1</option>
    <option value="2">chambre N° 2</option>
    <option value="3">chambre N° 3</option>
	<option value="4">chambre N° 4</option>
    <option value="5">chambre N° 5</option>
    <option value="6">chambre N° 6</option>
	</select>
	<p> Veuillez entrer votre code client:</p>
    <input type="text" name="cd_client" id="cd_client"/>
	<input type="submit" value="Poursuivre La réservation"/>
</form>
</section>



	
<!-- the footer -->  
<?php
   include_once("footer.php");
?>

<!-- Free template created by http://freehtml5templates.com -->
</html>
