<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Hotels ENNAKHLA</title>
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
</head> 
       
<body>
<?php
   include_once("header.php");
?>
<?php
   include_once("menu.php");
?>
<!--crétion de formulaire de recherche des chambres-->
<form name="villes" class="villes" method="post" action="Locations.php">
 <style>
  div {
    display: none;
  }
</style>
<p> Soyez Le Bienvenue A Notre Série D'hotels <span>ENNAKHLA</span></p>
<p> Veuillez choisir la ville pour votre Hébergement </p>
  <select name="choix" id="choix" onChange="changeit(this.value)">
    <OPTION VALUE="!!choisissez votre ville!!"><SELECTED>Choisir</SELECTED></OPTION>     
	<option value="rabat">rabat</option>
    <option value="agadir">agadir</option>
    <option value="casablanca">casablanca</option>
	<option value="chfchawn">chfchawn</option>
    <option value="dakhla">dakhla</option>
    <option value="essouira">essouira</option>
	<option value="ifrane">ifrane</option>
	<option value="marrakech">marrakech</option>
    <option value="tanger">tanger</option>
    <option value="meknes">meknes</option>
  </select><br /><br />
   
  <div id="rabat"><img src="images/villes/slider/rabat.jpeg"/></div>
  <div id="agadir"><img src="images/villes/slider/agadir.jpeg"/></div>
  <div id="casablanca"><img src="images/villes/slider/casablanca.jpeg"/></div>
  <div id="chfchawn"><img src="images/villes/slider/chfchawn.jpeg"/></div>
  <div id="dakhla"><img src="images/villes/slider/dakhla.jpeg"/></div>
  <div id="essouira"><img src="images/villes/slider/essouira.jpeg"/></div>
  <div id="ifrane"><img src="images/villes/slider/ifrane.jpeg"/></div>
  <div id="marrakech"><img src="images/villes/slider/marrakech.jpeg"/></div>
  <div id="tanger"><img src="images/villes/slider/tanger.jpeg"/></div>
  <div id="meknes"><img src="images/villes/slider/meknes.jpeg"/></div>
  <p id="!!choisissez votre ville!!"><img src="images/logos_icons/mini Plan 1.jpeg"/></p>
<input type="submit" value="Valider>>S'inscrire"/>

 
<script>
  function changeit(val) {
    document.getElementById("rabat").style.display="none";
    document.getElementById("agadir").style.display="none";
    document.getElementById("casablanca").style.display="none";
	document.getElementById("chfchawn").style.display="none";
    document.getElementById("dakhla").style.display="none";
    document.getElementById("essouira").style.display="none";
	document.getElementById("ifrane").style.display="none";
    document.getElementById("marrakech").style.display="none";
    document.getElementById("tanger").style.display="none";
    document.getElementById("meknes").style.display="none";
	document.getElementById("undefined").style.display="none";
    document.getElementById(val).style.display="block";
  }
</script>
</form>      
 
 <!-- the footer -->  
<?php
   include_once("footer.php");
?>

<!-- Free template created by http://freehtml5templates.com -->
</body>
</html>
