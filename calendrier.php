<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
//Afficher l'entête de la page 
$entete = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">'.
    '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >'.
          '<head>'.
          '<title></title>'.
          '<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />'.
                
            //chargement du css du calendrier
            '<link rel="stylesheet" media="screen" type="text/css" title="Design" href="css/calendrier.css" />'.
                
            //chargement des ressources JS du calendrier
            '<script type="text/javascript" src="js/calendrier.js"></script>'.
 
           '</head>'.
           '<body>' ;
echo ($entete);
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
       <input type="text" name="datearrivee" id="date" class="calendrier" size="10" />
       
</body>
<?php
$footer = '</body>'.
    '<html>';
echo ($footer);
?>
</html>
