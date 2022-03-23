<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />

</head>
<body>


<form id="form_inscription" name="form_inscription" method="post" action="traitement_inscription.php">
 <p class="invitation"> Veuillez Remplir vos informations s'il vous plais </p>
 <table>
 <tr>
 
    <td><label>Nom :</td>
      <td><input type="text" name="nom"/></td>
    </label>
 
  </tr>
  <tr>
  
    <td><label>Prénom :</td>
      <td><input type="text" name="prenom"/></td>
    </label>

  </tr>
  <tr>
  
    <td><label>CIN ou n°passeport:</td>
      <td><input type="text" name="cin"/></td>
    </label>
  
  </tr>
  <tr>
  
    <td><label>Pays :</td>.
      <td><input type="text" name="pays"/></td>
    </label>
 
  </tr>
  <tr>
  
    <td><label>Adresse :</td>
      <td><input type="text" name="adresse"/></td>
    </label>
 
  </tr>
  <tr>
    <td><label>Télèfone :</td>
     <td> <input type="tel" name="tel"/></td>
    </label>
  
  </tr>
  <tr>
 
    <td><label>Email :</td>
      <td><input type="text" name="mail" size="30"/></td>
    </label>
  
  </tr>
  <tr>
 
    <label>
      <td><input type="reset" name=""  value="Annuler" /></td><td><input type="submit" name="submitted"  value="Valider" /></td>
    </label>
 
  </tr>
  </table>
</form>
</body>
</html>
