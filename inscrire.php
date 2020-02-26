<?php
include ("connexionbdd.php");
$error=NULL;
if (isset($_GET["error"])) $error=$_GET['error'];
{ 
  if ($error==1) {
    $error="un probleme est survenu lors de votre inscription";
  }
  elseif ($error==2) {
    $error="Tous les champs doivent être renseignes";
  }
  elseif ($error==3) {
    $error="Le pseudo existe deja";
  }
}
?>
<!DOCTYPE html>
<head>
  <title>Inscription - SOUNDHAZE</title>
  <meta charset="UTF-8">
	<link rel="stylesheet" href="styles.css"></head>
<body>
<span>
<?php 
if (isset($error))
{
  echo $error;
}
?>
</span>
<h1><a href=index.php> SOUND HAZE </a></h1>
<form action="inscript.php" method="post">
Votre Nom :
<input type="text" name="nom" required>
Votre Prenom :
<input type="text" name="prenom" required>
Votre Pseudo :
<input type="text" name="pseudo" required>
Votre Mot de Passe :
<input type="password" name="password" required>
<input class="button" type="submit" name="valider" value="S'inscrire">
</form>
<button class="button"><a href="connecter.php">Connexion</a></button>
</body>
</html>