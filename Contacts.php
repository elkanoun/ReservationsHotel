<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/slider.css" type="text/css"/>
</head>
<?php
   include_once("header.php");
?>
<?php
   include_once("menu.php");
?>

<body>
<br/>
<p></p>
<div>
<p class="inv">Bienvenue Au Maroc chez <span>ENNAKHLA</span>, de type 5 étoiles,
		                Voici Les Contacts De Chaque ville :</p>
</div>
<!-- slider images hotels -->
<div id="slider">
    <!-- La banderolle qui contiens toute les images -->
      <div id="mask">
        <ul id="image_container">
          <li><img src="images/villes/slider/rabat.jpeg"></li>
          <li><img src="images/villes/slider/tanger.jpeg"></li>
          <li><img src="images/villes/slider/meknes.jpeg"></li>
          <li><img src="images/villes/slider/marrakech.jpeg"></li>
		  <li><img src="images/villes/slider/ifrane.jpeg"></li>
          <li><img src="images/villes/slider/essouira.jpeg"></li>
          <li><img src="images/villes/slider/dakhla.jpeg"></li>
          <li><img src="images/villes/slider/chfchawn.jpeg"></li>
		  <li><img src="images/villes/slider/casablanca.jpeg"></li>
		  <li><img src="images/villes/slider/agadir.jpeg"></li>
        </ul>
      </div>
      <img src="images/logos_icons/glass.png" id="glass">
      <!-- l'encart bleu. Quoter s'il est genant -->
      <div id="encart">
        <ul id="dots">
          <!-- les petits points qui affichent ou nous en somme sur le slide -->
          <li class="button1" onClick="changeImage(1)" ></li>
          <li class="button2" onClick="changeImage(2)" ></li>
          <li class="button3" onClick="changeImage(3)" ></li>
          <li class="button4" onClick="changeImage(4)" ></li>
		  <li class="button5" onClick="changeImage(5)" ></li>
          <li class="button6" onClick="changeImage(6)" ></li>
          <li class="button7" onClick="changeImage(7)" ></li>
          <li class="button8" onClick="changeImage(8)" ></li>
		  <li class="button9" onClick="changeImage(9)" ></li>
          <li class="button10" onClick="changeImage(10)" ></li>
        </ul>
      </div>
      <!-- fin du quote -->
      <!-- Les fleches de navigations -->
      <img src="images/logos_icons/fleche-gauche.png" id="fleche_gauche" class="fleche" onClick="prevImage()" >
      <img src="images/logos_icons/fleche-droite.png" id="fleche_droite" class="fleche" onClick="nextImage()" >
    </div>
    <script>
      // Des Variables pour pouvoir modifier facilement ce qui doit l'être
      var secDuration = 5;
      var image = 1;
      var maxImages = 10;
      var slider = document.getElementById('slider');
      var timeout
      
      // La fonction qui change les images. Peut pointer vers une image spécifique, ou bien être appelée vide, pour passer ç celle d'apres
      function changeImage(requiredImage) {
      
        // Début de l'algorithme  .
        if (!requiredImage && requiredImage != 0){ //Si nous n'avons pas spécifié une image
          if(image < maxImages){// Si l'image n'est pas la dernière, on avance d'une image
            image++;
          }
          else{
            image = 1;//Si Nous sommes sur la dernière, on reviens au début 
          }
        }
        else{ // Si nous avont spécifié une image
          if(requiredImage > maxImages){//Si nous avont spécifié une image au dela de la dernière, on revient à la première
            image = 1;
          }
          else if(requiredImage < 1){ //Si nous avont spécifié une image 0 ou moins, on vas à la dernière image
            image = maxImages;
          }
          else{
            image = requiredImage; // Sinon, on vas à l'image spécifiée.
          }
        }
        //On dis au slider à travers sa classe quel image il doit afficher
        slider.className = "image"+image;
        
        // On nettoie et relance le timeout
        clearTimeout(timeout)
        timeout = setTimeout("changeImage()",secDuration*1000);
      }
      
      //Deux petites fonctions tres compréhensibles
      function nextImage(){
        changeImage(image+1);
      }
      function prevImage(){
        changeImage(image-1);
      }
      
      //On met le slide sur l'image par défaut, ici la 1ere
      changeImage(1);
    </script>


 <!--affichage des contacts de ENNAKHLA dans chaque ville-->
  <?php
    include_once("connexion_sql.php");
   
    $requette = $bdd -> prepare('select *from hotel');
	$requette -> execute(array());
	
			   while($donnees = $requette -> fetch())
                    {
					?>
				         <p><strong><?php echo $donnees['villehot']; ?></strong></p>
						 <p><?php echo $donnees['nbrchambre']; ?> chambres</p>									
						 <p><?php echo $donnees['adressehot']; ?></p>
						 <p>télèphone: <?php echo $donnees['telhot']; ?></p>
		                 <p>fax: <?php echo $donnees['faxhot']; ?></p>
		                 <p>email: <?php echo $donnees['mailhot']; ?></p>
				    
					 <?php
	                }
					$requette -> closeCursor();
                    ?>
 
				
		
<!-- the footer -->  
<?php
   include_once("footer.php");
?>
		
</body>

</html>
