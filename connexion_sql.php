<?php
try{
  $bdd =new PDO('mysql:host=localhost;dbname=ennakhla','root','');
}
catch(Exception $e)
{
 die('Erreur: '.$e ->getMessage());
}



?>



